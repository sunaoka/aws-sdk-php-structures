<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Maximize'|'Minimize'|null $Type
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss' $MetricName
 * @property float $Value
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null $StandardMetricName
 */
class FinalAutoMLJobObjectiveMetric extends Shape
{
    /**
     * @param array{
     *     Type?: 'Maximize'|'Minimize'|null,
     *     MetricName: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss',
     *     Value: float,
     *     StandardMetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
