<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata|null $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS'|null $JobStatus
 * @property string|null $NextToken
 * @property list<Shapes\ExpenseDocument>|null $ExpenseDocuments
 * @property list<Shapes\Warning>|null $Warnings
 * @property string|null $StatusMessage
 * @property string|null $AnalyzeExpenseModelVersion
 */
class GetExpenseAnalysisResponse extends Response
{
}
