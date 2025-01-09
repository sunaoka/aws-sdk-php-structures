<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EstimatedCompletionTime
 * @property string $AnalysisCompletionTime
 * @property string $AnalysisStartedTime
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED' $AnalysisStatus
 * @property 'NO_USAGE_FOUND'|'INTERNAL_FAILURE'|'INVALID_SAVINGS_PLANS_TO_ADD'|'INVALID_SAVINGS_PLANS_TO_EXCLUDE'|'INVALID_ACCOUNT_ID' $ErrorCode
 * @property string $AnalysisId
 * @property CommitmentPurchaseAnalysisConfiguration $CommitmentPurchaseAnalysisConfiguration
 */
class AnalysisSummary extends Shape
{
    /**
     * @param array{
     *     EstimatedCompletionTime?: string,
     *     AnalysisCompletionTime?: string,
     *     AnalysisStartedTime?: string,
     *     AnalysisStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED',
     *     ErrorCode?: 'NO_USAGE_FOUND'|'INTERNAL_FAILURE'|'INVALID_SAVINGS_PLANS_TO_ADD'|'INVALID_SAVINGS_PLANS_TO_EXCLUDE'|'INVALID_ACCOUNT_ID',
     *     AnalysisId?: string,
     *     CommitmentPurchaseAnalysisConfiguration?: CommitmentPurchaseAnalysisConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
