<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null $MetricName
 * @property float|null $Value
 * @property 'Train'|'Validation'|'Test'|null $Set
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null $StandardMetricName
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null,
     *     Value?: float|null,
     *     Set?: 'Train'|'Validation'|'Test'|null,
     *     StandardMetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
