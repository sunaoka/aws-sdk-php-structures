<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageClassificationJobConfig $ImageClassificationJobConfig
 * @property TextClassificationJobConfig $TextClassificationJobConfig
 * @property TimeSeriesForecastingJobConfig $TimeSeriesForecastingJobConfig
 * @property TabularJobConfig $TabularJobConfig
 * @property TextGenerationJobConfig $TextGenerationJobConfig
 */
class AutoMLProblemTypeConfig extends Shape
{
    /**
     * @param array{
     *     ImageClassificationJobConfig?: ImageClassificationJobConfig,
     *     TextClassificationJobConfig?: TextClassificationJobConfig,
     *     TimeSeriesForecastingJobConfig?: TimeSeriesForecastingJobConfig,
     *     TabularJobConfig?: TabularJobConfig,
     *     TextGenerationJobConfig?: TextGenerationJobConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
