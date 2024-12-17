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
# Usage
## 1. Summarization
To summarize PDFs and save the output:
```
python summarization.py --input <path_to_pdf_folder> --output <output_file>

``` 
## 2. Information Extraction & Citation Generation
To extract metadata and generate citations:
```
python extract_info.py --input <path_to_pdf_folder> --output <output_folder>

```
## 3. Export Citations
Export citations in .docx or .bib formats:
```
python export_citations.py --format bib --output mycitation.bib
python export_citations.py --format docx --output citation.docx

```
# Project File Structure

```
ai-research-assistant/
│
├── models/                # Pre-trained models
│   ├── X101/              # ResNet X101 config & model files
│   └── T5/                # T5 summarization models
│
├── utils/                 # Helper functions
├── data/                  # Input/Output PDF files
│
├── extract_info.py        # Information extraction script
├── summarization.py       # Summarization script
├── export_citations.py    # Export citations in multiple formats
│
├── requirements.txt       # Python dependencies
└── README.md              # Project documentation

```
# Limitations
* Requires high computational resources for training models.
* Limited to processing between 4-6 PDFs simultaneously due to server constraints.
* PDF documents must be:
 * Plain text or LaTeX format.
 * Non-colored PDFs.
# Future Improvements
* Support for colored and complex PDFs.
* Cloud-based processing to overcome hardware constraints.
* Fine-tuning additional Transformer models for improved accuracy.
# Contact
For any queries or contributions, feel free to open an issue or contact the contributors.
# Clone, Contribute, and Share!
We welcome contributions to enhance the project. Fork the repository, create a feature branch, and submit a pull request.

