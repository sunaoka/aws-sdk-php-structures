<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata|null $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS'|null $JobStatus
 * @property Shapes\LendingSummary|null $Summary
 * @property list<Shapes\Warning>|null $Warnings
 * @property string|null $StatusMessage
 * @property string|null $AnalyzeLendingModelVersion
 */
class GetLendingAnalysisSummaryResponse extends Response
{
}
