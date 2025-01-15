<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageClassificationJobConfig|null $ImageClassificationJobConfig
 * @property TextClassificationJobConfig|null $TextClassificationJobConfig
 * @property TimeSeriesForecastingJobConfig|null $TimeSeriesForecastingJobConfig
 * @property TabularJobConfig|null $TabularJobConfig
 * @property TextGenerationJobConfig|null $TextGenerationJobConfig
 */
class AutoMLProblemTypeConfig extends Shape
{
    /**
     * @param array{
     *     ImageClassificationJobConfig?: ImageClassificationJobConfig|null,
     *     TextClassificationJobConfig?: TextClassificationJobConfig|null,
     *     TimeSeriesForecastingJobConfig?: TimeSeriesForecastingJobConfig|null,
     *     TabularJobConfig?: TabularJobConfig|null,
     *     TextGenerationJobConfig?: TextGenerationJobConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
