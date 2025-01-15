<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorName
 * @property string|null $AlgorithmArn
 * @property int $ForecastHorizon
 * @property list<string>|null $ForecastTypes
 * @property bool|null $PerformAutoML
 * @property 'LatencyOptimized'|'AccuracyOptimized'|null $AutoMLOverrideStrategy
 * @property bool|null $PerformHPO
 * @property array<string, string>|null $TrainingParameters
 * @property Shapes\EvaluationParameters|null $EvaluationParameters
 * @property Shapes\HyperParameterTuningJobConfig|null $HPOConfig
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\FeaturizationConfig $FeaturizationConfig
 * @property Shapes\EncryptionConfig|null $EncryptionConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'|null $OptimizationMetric
 */
class CreatePredictorRequest extends Request
{
    /**
     * @param array{
     *     PredictorName: string,
     *     AlgorithmArn?: string|null,
     *     ForecastHorizon: int,
     *     ForecastTypes?: list<string>|null,
     *     PerformAutoML?: bool|null,
     *     AutoMLOverrideStrategy?: 'LatencyOptimized'|'AccuracyOptimized'|null,
     *     PerformHPO?: bool|null,
     *     TrainingParameters?: array<string, string>|null,
     *     EvaluationParameters?: Shapes\EvaluationParameters|null,
     *     HPOConfig?: Shapes\HyperParameterTuningJobConfig|null,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     FeaturizationConfig: Shapes\FeaturizationConfig,
     *     EncryptionConfig?: Shapes\EncryptionConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     OptimizationMetric?: 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
