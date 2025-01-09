<?php

namespace Sunaoka\Aws\Structures\CostExplorer\StartCommitmentPurchaseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SavingsPlansPurchaseAnalysisConfiguration $SavingsPlansPurchaseAnalysisConfiguration
 */
class CommitmentPurchaseAnalysisConfiguration extends Shape
{
    /**
     * @param array{SavingsPlansPurchaseAnalysisConfiguration?: SavingsPlansPurchaseAnalysisConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
