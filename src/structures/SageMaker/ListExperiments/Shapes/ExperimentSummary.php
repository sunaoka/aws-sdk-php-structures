<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExperimentArn
 * @property string|null $ExperimentName
 * @property string|null $DisplayName
 * @property ExperimentSource|null $ExperimentSource
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ExperimentSummary extends Shape
{
    /**
     * @param array{
     *     ExperimentArn?: string|null,
     *     ExperimentName?: string|null,
     *     DisplayName?: string|null,
     *     ExperimentSource?: ExperimentSource|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
