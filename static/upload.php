<?php
$targetDir = "upload_pdf/"; // Specify the folder where you want to save the PDF files
$targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if a file was selected
if (!empty($_FILES["pdfFile"]["tmp_name"])) {
    // Check if the file is a PDF
    if ($fileType === "pdf") {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            echo "The file has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, only PDF files are allowed.";
    }
} else {
    echo "Please select a file.";
}
?>
