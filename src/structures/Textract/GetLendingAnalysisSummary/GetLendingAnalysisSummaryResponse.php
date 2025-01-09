<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS' $JobStatus
 * @property Shapes\LendingSummary $Summary
 * @property list<Shapes\Warning> $Warnings
 * @property string $StatusMessage
 * @property string $AnalyzeLendingModelVersion
 */
class GetLendingAnalysisSummaryResponse extends Response
{
}
