<!DOCTYPE html>
<html>
<head>
    <title>New Invoice Created</title>
</head>
<body>
    <h1>New Invoice Created</h1>
    <p>An invoice has been created with the following details:</p>
    <ul>
        <li>Invoice Number: {{ $invoice->invoice_number }}</li>
        <li>Invoice Date: {{ $invoice->invoice_Date }}</li>
        <li>Due Date: {{ $invoice->Due_date }}</li>
        <li>Product: {{ $invoice->product }}</li>
        <li>Section: {{ $invoice->section_id }}</li>
        <li>Amount Collection: {{ $invoice->Amount_collection }}</li>
        <li>Amount Commission: {{ $invoice->Amount_Commission }}</li>
        <li>Discount: {{ $invoice->Discount }}</li>
        <li>Value VAT: {{ $invoice->Value_VAT }}</li>
        <li>Rate VAT: {{ $invoice->Rate_VAT }}</li>
        <li>Total: {{ $invoice->Total }}</li>
        <li>Status: {{ $invoice->Status }}</li>
        <li>Note: {{ $invoice->note }}</li>
    </ul>
</body>
</html>
