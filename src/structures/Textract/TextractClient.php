<?php

namespace Sunaoka\Aws\Structures\Textract;

class TextractClient extends \Aws\Textract\TextractClient
{
    use AnalyzeDocument\AnalyzeDocumentTrait;
    use AnalyzeExpense\AnalyzeExpenseTrait;
    use AnalyzeID\AnalyzeIDTrait;
    use CreateAdapter\CreateAdapterTrait;
    use CreateAdapterVersion\CreateAdapterVersionTrait;
    use CreateBlueprint\CreateBlueprintTrait;
    use CreateBlueprintVersion\CreateBlueprintVersionTrait;
    use CreateProject\CreateProjectTrait;
    use DeleteAdapter\DeleteAdapterTrait;
    use DeleteAdapterVersion\DeleteAdapterVersionTrait;
    use DeleteBlueprint\DeleteBlueprintTrait;
    use DeleteProject\DeleteProjectTrait;
    use DetectDocumentText\DetectDocumentTextTrait;
    use GetAdapter\GetAdapterTrait;
    use GetAdapterVersion\GetAdapterVersionTrait;
    use GetBlueprint\GetBlueprintTrait;
    use GetDocumentAnalysis\GetDocumentAnalysisTrait;
    use GetDocumentInsights\GetDocumentInsightsTrait;
    use GetDocumentTextDetection\GetDocumentTextDetectionTrait;
    use GetExpenseAnalysis\GetExpenseAnalysisTrait;
    use GetLendingAnalysis\GetLendingAnalysisTrait;
    use GetLendingAnalysisSummary\GetLendingAnalysisSummaryTrait;
    use GetProject\GetProjectTrait;
    use ListAdapterVersions\ListAdapterVersionsTrait;
    use ListAdapters\ListAdaptersTrait;
    use ListBlueprints\ListBlueprintsTrait;
    use ListProjects\ListProjectsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartDocumentAnalysis\StartDocumentAnalysisTrait;
    use StartDocumentInsights\StartDocumentInsightsTrait;
    use StartDocumentTextDetection\StartDocumentTextDetectionTrait;
    use StartExpenseAnalysis\StartExpenseAnalysisTrait;
    use StartLendingAnalysis\StartLendingAnalysisTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAdapter\UpdateAdapterTrait;
    use UpdateBlueprint\UpdateBlueprintTrait;
    use UpdateProject\UpdateProjectTrait;
}
