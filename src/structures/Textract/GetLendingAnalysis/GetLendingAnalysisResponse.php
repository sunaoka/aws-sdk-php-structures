<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata|null $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS'|null $JobStatus
 * @property string|null $NextToken
 * @property list<Shapes\LendingResult>|null $Results
 * @property list<Shapes\Warning>|null $Warnings
 * @property string|null $StatusMessage
 * @property string|null $AnalyzeLendingModelVersion
 */
class GetLendingAnalysisResponse extends Response
{
}
