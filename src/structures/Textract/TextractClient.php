<?php

namespace Sunaoka\Aws\Structures\Textract;

class TextractClient extends \Aws\Textract\TextractClient
{
    use AnalyzeDocument\AnalyzeDocumentTrait;
    use AnalyzeExpense\AnalyzeExpenseTrait;
    use AnalyzeID\AnalyzeIDTrait;
    use DetectDocumentText\DetectDocumentTextTrait;
    use GetDocumentAnalysis\GetDocumentAnalysisTrait;
    use GetDocumentTextDetection\GetDocumentTextDetectionTrait;
    use GetExpenseAnalysis\GetExpenseAnalysisTrait;
    use GetLendingAnalysis\GetLendingAnalysisTrait;
    use GetLendingAnalysisSummary\GetLendingAnalysisSummaryTrait;
    use StartDocumentAnalysis\StartDocumentAnalysisTrait;
    use StartDocumentTextDetection\StartDocumentTextDetectionTrait;
    use StartExpenseAnalysis\StartExpenseAnalysisTrait;
    use StartLendingAnalysis\StartLendingAnalysisTrait;
}
