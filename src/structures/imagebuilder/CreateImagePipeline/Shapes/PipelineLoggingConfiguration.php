<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imageLogGroupName
 * @property string|null $pipelineLogGroupName
 */
class PipelineLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     imageLogGroupName?: string|null,
     *     pipelineLogGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
