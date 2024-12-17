 # AI Research Assistant Tool
 ## Overview
 The AI Research Assistant Tool is a powerful system that automates the process of multi-document summarization, information extraction, and citation generation. 
 It simplifies research workflows by extracting metadata like titles, authors, abstracts, and dates from academic PDFs and generating citations in APA, MLA, and Chicago formats.
# Key Features
### Multi-Document Summarization
- Supports extractive and abstractive summarization using T5 models.
- Processes multiple PDFs efficiently.
 -Information Extraction

### Extracts key document metadata:
- Title
- Authors
- Abstract
- Date
- Citation Generation

### Automatically generates citations in:
- APA Format
- MLA Format
- Chicago Format
- Export citations in .docx or .bib formats.
  
### PDF Processing
- Handles PDFs and converts pages to images for model processing.
  
# Technologies Used
* Programming Language: Python
* Frameworks & Libraries:
  * PyTorch
  * Transformers (HuggingFace)
  * Detectron2
  * Spacy
  * Tesseract OCR
  * PDF Processing: pdfplumber, pdf2image, Pillow
* Models:
  * T5: Summarization
  * ResNet-X101: Information extraction
# Installation
Follow these steps to set up the project on your local machine:
## 1. Clone the Repository
```
git clone https://github.com/your-username/ai-research-assistant.git
cd ai-research-assistant
```
## 2. Install Dependencies
Ensure Python 3.8+ is installed, then run:
```
pip install -r requirements.txt
```
## 3. Install Additional Tools
* Install Tesseract OCR:
  * Linux:
```
sudo apt install tesseract-ocr
``` 

  * Windows: Download Tesseract OCR.
Install spacy model:
```
python -m spacy download en_core_web_trf
``` 

