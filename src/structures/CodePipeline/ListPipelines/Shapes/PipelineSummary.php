<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $version
 * @property 'V1'|'V2' $pipelineType
 * @property 'QUEUED'|'SUPERSEDED'|'PARALLEL' $executionMode
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $updated
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     version?: int,
     *     pipelineType?: 'V1'|'V2',
     *     executionMode?: 'QUEUED'|'SUPERSEDED'|'PARALLEL',
     *     created?: \Aws\Api\DateTimeResult,
     *     updated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
