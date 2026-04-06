<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageClassificationJobConfig|null $ImageClassificationJobConfig
 * @property TextClassificationJobConfig|null $TextClassificationJobConfig
 * @property TabularJobConfig|null $TabularJobConfig
 * @property TimeSeriesForecastingJobConfig|null $TimeSeriesForecastingJobConfig
 */
class AutoMLProblemTypeConfig extends Shape
{
    /**
     * @param array{
     *     ImageClassificationJobConfig?: ImageClassificationJobConfig|null,
     *     TextClassificationJobConfig?: TextClassificationJobConfig|null,
     *     TabularJobConfig?: TabularJobConfig|null,
     *     TimeSeriesForecastingJobConfig?: TimeSeriesForecastingJobConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
