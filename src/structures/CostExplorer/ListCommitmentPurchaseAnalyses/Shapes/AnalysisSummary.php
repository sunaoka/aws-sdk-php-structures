<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EstimatedCompletionTime
 * @property string|null $AnalysisCompletionTime
 * @property string|null $AnalysisStartedTime
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED'|null $AnalysisStatus
 * @property 'NO_USAGE_FOUND'|'INTERNAL_FAILURE'|'INVALID_SAVINGS_PLANS_TO_ADD'|'INVALID_SAVINGS_PLANS_TO_EXCLUDE'|'INVALID_ACCOUNT_ID'|null $ErrorCode
 * @property string|null $AnalysisId
 * @property CommitmentPurchaseAnalysisConfiguration|null $CommitmentPurchaseAnalysisConfiguration
 */
class AnalysisSummary extends Shape
{
    /**
     * @param array{
     *     EstimatedCompletionTime?: string|null,
     *     AnalysisCompletionTime?: string|null,
     *     AnalysisStartedTime?: string|null,
     *     AnalysisStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED'|null,
     *     ErrorCode?: 'NO_USAGE_FOUND'|'INTERNAL_FAILURE'|'INVALID_SAVINGS_PLANS_TO_ADD'|'INVALID_SAVINGS_PLANS_TO_EXCLUDE'|'INVALID_ACCOUNT_ID'|null,
     *     AnalysisId?: string|null,
     *     CommitmentPurchaseAnalysisConfiguration?: CommitmentPurchaseAnalysisConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
