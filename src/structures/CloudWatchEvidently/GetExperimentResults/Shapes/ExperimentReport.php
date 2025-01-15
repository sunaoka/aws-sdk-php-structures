<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property string|null $metricName
 * @property 'BayesianInference'|null $reportName
 * @property string|null $treatmentName
 */
class ExperimentReport extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     metricName?: string|null,
     *     reportName?: 'BayesianInference'|null,
     *     treatmentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
