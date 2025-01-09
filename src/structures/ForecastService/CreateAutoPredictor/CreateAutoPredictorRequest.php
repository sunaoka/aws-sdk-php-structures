<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorName
 * @property int $ForecastHorizon
 * @property list<string> $ForecastTypes
 * @property list<string> $ForecastDimensions
 * @property string $ForecastFrequency
 * @property Shapes\DataConfig $DataConfig
 * @property Shapes\EncryptionConfig $EncryptionConfig
 * @property string $ReferencePredictorArn
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE' $OptimizationMetric
 * @property bool $ExplainPredictor
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\MonitorConfig $MonitorConfig
 * @property Shapes\TimeAlignmentBoundary $TimeAlignmentBoundary
 */
class CreateAutoPredictorRequest extends Request
{
    /**
     * @param array{
     *     PredictorName: string,
     *     ForecastHorizon?: int,
     *     ForecastTypes?: list<string>,
     *     ForecastDimensions?: list<string>,
     *     ForecastFrequency?: string,
     *     DataConfig?: Shapes\DataConfig,
     *     EncryptionConfig?: Shapes\EncryptionConfig,
     *     ReferencePredictorArn?: string,
     *     OptimizationMetric?: 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE',
     *     ExplainPredictor?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     MonitorConfig?: Shapes\MonitorConfig,
     *     TimeAlignmentBoundary?: Shapes\TimeAlignmentBoundary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
