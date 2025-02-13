<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EstimatedCompletionTime
 * @property string|null $AnalysisCompletionTime
 * @property string $AnalysisStartedTime
 * @property string $AnalysisId
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED' $AnalysisStatus
 * @property 'NO_USAGE_FOUND'|'INTERNAL_FAILURE'|'INVALID_SAVINGS_PLANS_TO_ADD'|'INVALID_SAVINGS_PLANS_TO_EXCLUDE'|'INVALID_ACCOUNT_ID'|null $ErrorCode
 * @property Shapes\AnalysisDetails|null $AnalysisDetails
 * @property Shapes\CommitmentPurchaseAnalysisConfiguration $CommitmentPurchaseAnalysisConfiguration
 */
class GetCommitmentPurchaseAnalysisResponse extends Response
{
}
