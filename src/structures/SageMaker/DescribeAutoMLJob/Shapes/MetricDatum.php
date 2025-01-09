<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss' $MetricName
 * @property float $Value
 * @property 'Train'|'Validation'|'Test' $Set
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|'Rouge1'|'Rouge2'|'RougeL'|'RougeLSum'|'Perplexity'|'ValidationLoss'|'TrainingLoss' $StandardMetricName
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss',
     *     Value?: float,
     *     Set?: 'Train'|'Validation'|'Test',
     *     StandardMetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|'Rouge1'|'Rouge2'|'RougeL'|'RougeLSum'|'Perplexity'|'ValidationLoss'|'TrainingLoss'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
