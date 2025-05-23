<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SavingsPlansPurchaseAnalysisDetails|null $SavingsPlansPurchaseAnalysisDetails
 */
class AnalysisDetails extends Shape
{
    /**
     * @param array{SavingsPlansPurchaseAnalysisDetails?: SavingsPlansPurchaseAnalysisDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
