<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorName
 * @property int|null $ForecastHorizon
 * @property list<string>|null $ForecastTypes
 * @property list<string>|null $ForecastDimensions
 * @property string|null $ForecastFrequency
 * @property Shapes\DataConfig|null $DataConfig
 * @property Shapes\EncryptionConfig|null $EncryptionConfig
 * @property string|null $ReferencePredictorArn
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'|null $OptimizationMetric
 * @property bool|null $ExplainPredictor
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\MonitorConfig|null $MonitorConfig
 * @property Shapes\TimeAlignmentBoundary|null $TimeAlignmentBoundary
 */
class CreateAutoPredictorRequest extends Request
{
    /**
     * @param array{
     *     PredictorName: string,
     *     ForecastHorizon?: int|null,
     *     ForecastTypes?: list<string>|null,
     *     ForecastDimensions?: list<string>|null,
     *     ForecastFrequency?: string|null,
     *     DataConfig?: Shapes\DataConfig|null,
     *     EncryptionConfig?: Shapes\EncryptionConfig|null,
     *     ReferencePredictorArn?: string|null,
     *     OptimizationMetric?: 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'|null,
     *     ExplainPredictor?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     MonitorConfig?: Shapes\MonitorConfig|null,
     *     TimeAlignmentBoundary?: Shapes\TimeAlignmentBoundary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
