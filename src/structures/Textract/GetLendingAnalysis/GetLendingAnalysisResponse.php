<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS' $JobStatus
 * @property string $NextToken
 * @property list<Shapes\LendingResult> $Results
 * @property list<Shapes\Warning> $Warnings
 * @property string $StatusMessage
 * @property string $AnalyzeLendingModelVersion
 */
class GetLendingAnalysisResponse extends Response
{
}
