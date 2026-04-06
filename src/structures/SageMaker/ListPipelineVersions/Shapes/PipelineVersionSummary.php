<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineArn
 * @property int<1, max>|null $PipelineVersionId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $PipelineVersionDescription
 * @property string|null $PipelineVersionDisplayName
 * @property string|null $LastExecutionPipelineExecutionArn
 */
class PipelineVersionSummary extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string|null,
     *     PipelineVersionId?: int<1, max>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     PipelineVersionDescription?: string|null,
     *     PipelineVersionDisplayName?: string|null,
     *     LastExecutionPipelineExecutionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
