<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExperimentArn
 * @property string $ExperimentName
 * @property string $DisplayName
 * @property ExperimentSource $ExperimentSource
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ExperimentSummary extends Shape
{
    /**
     * @param array{
     *     ExperimentArn?: string,
     *     ExperimentName?: string,
     *     DisplayName?: string,
     *     ExperimentSource?: ExperimentSource,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
