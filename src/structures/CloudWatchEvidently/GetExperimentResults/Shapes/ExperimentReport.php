<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $metricName
 * @property 'BayesianInference' $reportName
 * @property string $treatmentName
 */
class ExperimentReport extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     metricName?: string,
     *     reportName?: 'BayesianInference',
     *     treatmentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
