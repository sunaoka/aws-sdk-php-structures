<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null $MetricName
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|'Rouge1'|'Rouge2'|'RougeL'|'RougeLSum'|'Perplexity'|'ValidationLoss'|'TrainingLoss'|null $StandardMetricName
 * @property float|null $Value
 * @property 'Train'|'Validation'|'Test'|null $Set
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null,
     *     StandardMetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|'Rouge1'|'Rouge2'|'RougeL'|'RougeLSum'|'Perplexity'|'ValidationLoss'|'TrainingLoss'|null,
     *     Value?: float|null,
     *     Set?: 'Train'|'Validation'|'Test'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
