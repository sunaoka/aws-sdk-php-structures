<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorName
 * @property string $AlgorithmArn
 * @property int $ForecastHorizon
 * @property list<string> $ForecastTypes
 * @property bool $PerformAutoML
 * @property 'LatencyOptimized'|'AccuracyOptimized' $AutoMLOverrideStrategy
 * @property bool $PerformHPO
 * @property array<string, string> $TrainingParameters
 * @property Shapes\EvaluationParameters $EvaluationParameters
 * @property Shapes\HyperParameterTuningJobConfig $HPOConfig
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\FeaturizationConfig $FeaturizationConfig
 * @property Shapes\EncryptionConfig $EncryptionConfig
 * @property list<Shapes\Tag> $Tags
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE' $OptimizationMetric
 */
class CreatePredictorRequest extends Request
{
    /**
     * @param array{
     *     PredictorName: string,
     *     AlgorithmArn?: string,
     *     ForecastHorizon: int,
     *     ForecastTypes?: list<string>,
     *     PerformAutoML?: bool,
     *     AutoMLOverrideStrategy?: 'LatencyOptimized'|'AccuracyOptimized',
     *     PerformHPO?: bool,
     *     TrainingParameters?: array<string, string>,
     *     EvaluationParameters?: Shapes\EvaluationParameters,
     *     HPOConfig?: Shapes\HyperParameterTuningJobConfig,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     FeaturizationConfig: Shapes\FeaturizationConfig,
     *     EncryptionConfig?: Shapes\EncryptionConfig,
     *     Tags?: list<Shapes\Tag>,
     *     OptimizationMetric?: 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
