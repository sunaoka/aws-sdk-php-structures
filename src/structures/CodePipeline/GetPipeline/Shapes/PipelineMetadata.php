<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineArn
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $updated
 * @property \Aws\Api\DateTimeResult $pollingDisabledAt
 */
class PipelineMetadata extends Shape
{
    /**
     * @param array{
     *     pipelineArn?: string,
     *     created?: \Aws\Api\DateTimeResult,
     *     updated?: \Aws\Api\DateTimeResult,
     *     pollingDisabledAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
