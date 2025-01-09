<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Maximize'|'Minimize' $Type
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss' $MetricName
 * @property float $Value
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss' $StandardMetricName
 */
class FinalAutoMLJobObjectiveMetric extends Shape
{
    /**
     * @param array{
     *     Type?: 'Maximize'|'Minimize',
     *     MetricName: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss',
     *     Value: float,
     *     StandardMetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
