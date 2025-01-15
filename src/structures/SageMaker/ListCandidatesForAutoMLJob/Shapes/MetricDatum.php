<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCandidatesForAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null $MetricName
 * @property float|null $Value
 * @property 'Train'|'Validation'|'Test'|null $Set
 * @property 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|'Rouge1'|'Rouge2'|'RougeL'|'RougeLSum'|'Perplexity'|'ValidationLoss'|'TrainingLoss'|null $StandardMetricName
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'BalancedAccuracy'|'R2'|'Recall'|'RecallMacro'|'Precision'|'PrecisionMacro'|'MAE'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|null,
     *     Value?: float|null,
     *     Set?: 'Train'|'Validation'|'Test'|null,
     *     StandardMetricName?: 'Accuracy'|'MSE'|'F1'|'F1macro'|'AUC'|'RMSE'|'MAE'|'R2'|'BalancedAccuracy'|'Precision'|'PrecisionMacro'|'Recall'|'RecallMacro'|'LogLoss'|'InferenceLatency'|'MAPE'|'MASE'|'WAPE'|'AverageWeightedQuantileLoss'|'Rouge1'|'Rouge2'|'RougeL'|'RougeLSum'|'Perplexity'|'ValidationLoss'|'TrainingLoss'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
