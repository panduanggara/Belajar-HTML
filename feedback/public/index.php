<?php
    // koneksi ke database
    include "../config/database.php";
    include "../functions/helpers.php";
    
    $emotions = query("SELECT * FROM emotions");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="process.php" method="POST" enctype="multipart/form-data" class="feedback-form">
            <h1 class="form-title">My Feedback Form</h1>
            <p class="form-subtitle">Kirimkan feedback mu untuk akuu!!</p>
            
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
            </div>
            
            <div class="form-group">
                <label for="hobi">Hobi :</label>
                <input type="text" id="hobi" name="hobi">
            </div>

            <div class="form-group checkbox-group">
                <p>Please check all the emotions that apply to you :</p>
                
                <div>
                <?php foreach($emotions as $emotions) : ?>
                    <li><input type="checkbox" name="emotions[]"
                    value="<?php echo $emotions ['id']; ?>">
                    <?php echo $emotions['emotion_name'];?>
                    </li>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="form-group radio-group">
                <p>How satisfied were you with our service :</p>
                <div>
                    <input type="radio" id="very_satisfied" name="satisfaction" value="Very Satisfied">
                    <label for="very_satisfied">Very Satisfied</label>
                </div>
                <div>
                    <input type="radio" id="satisfied" name="satisfaction" value="Satisfied">
                    <label for="satisfied">Satisfied</label>
                </div>
                <div>
                    <input type="radio" id="didnt_care" name="satisfaction" value="Didn't Care">
                    <label for="didnt_care">Didn't Care</label>
                </div>
                <div>
                    <input type="radio" id="dissatisfied" name="satisfaction" value="Dissatisfied">
                    <label for="dissatisfied">Dissatisfied</label>
                </div>
                <div>
                    <input type="radio" id="very_dissatisfied" name="satisfaction" value="Very Dissatisfied">
                    <label for="very_dissatisfied">Very Dissatisfied</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="comments">Further Comments :</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Bio photo :</label>
                <input type="file" id="photo" name="photo">
            </div>

            <div class="form-group">
                <label for="location">Location visited :</label>
                <select id="location" name="location">
                    <option value="">Select location</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Semarang">Semarang</option>
                </select>
            </div>

            <button type="submit" class="submit-button">Kirim</button>
        </form>
    </div>
</body>
</html>