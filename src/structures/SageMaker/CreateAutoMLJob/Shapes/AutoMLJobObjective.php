<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss' $MetricName
 */
class AutoMLJobObjective extends Shape
{
    /**
     * @param array{MetricName: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
