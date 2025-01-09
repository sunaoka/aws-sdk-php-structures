<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss' $MetricName
 */
class AutoMLJobObjective extends Shape
{
    /**
     * @param array{MetricName: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
