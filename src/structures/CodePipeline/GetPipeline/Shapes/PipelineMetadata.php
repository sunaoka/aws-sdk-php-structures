<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineArn
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $updated
 * @property \Aws\Api\DateTimeResult|null $pollingDisabledAt
 */
class PipelineMetadata extends Shape
{
    /**
     * @param array{
     *     pipelineArn?: string|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     updated?: \Aws\Api\DateTimeResult|null,
     *     pollingDisabledAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
