<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS' $JobStatus
 * @property string $NextToken
 * @property list<Shapes\ExpenseDocument> $ExpenseDocuments
 * @property list<Shapes\Warning> $Warnings
 * @property string $StatusMessage
 * @property string $AnalyzeExpenseModelVersion
 */
class GetExpenseAnalysisResponse extends Response
{
}
