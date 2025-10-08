<?php

namespace Sunaoka\Aws\Structures\Textract;

class TextractClient extends \Aws\Textract\TextractClient
{
    use AnalyzeDocument\AnalyzeDocumentTrait;
    use AnalyzeExpense\AnalyzeExpenseTrait;
    use AnalyzeID\AnalyzeIDTrait;
    use CreateAdapter\CreateAdapterTrait;
    use CreateAdapterVersion\CreateAdapterVersionTrait;
    use DeleteAdapter\DeleteAdapterTrait;
    use DeleteAdapterVersion\DeleteAdapterVersionTrait;
    use DetectDocumentText\DetectDocumentTextTrait;
    use GetAdapter\GetAdapterTrait;
    use GetAdapterVersion\GetAdapterVersionTrait;
    use GetDocumentAnalysis\GetDocumentAnalysisTrait;
    use GetDocumentTextDetection\GetDocumentTextDetectionTrait;
    use GetExpenseAnalysis\GetExpenseAnalysisTrait;
    use GetLendingAnalysis\GetLendingAnalysisTrait;
    use GetLendingAnalysisSummary\GetLendingAnalysisSummaryTrait;
    use ListAdapterVersions\ListAdapterVersionsTrait;
    use ListAdapters\ListAdaptersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartDocumentAnalysis\StartDocumentAnalysisTrait;
    use StartDocumentTextDetection\StartDocumentTextDetectionTrait;
    use StartExpenseAnalysis\StartExpenseAnalysisTrait;
    use StartLendingAnalysis\StartLendingAnalysisTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAdapter\UpdateAdapterTrait;
}
