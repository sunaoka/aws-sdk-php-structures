<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $resolvedValue
 */
class ResolvedPipelineVariable extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     resolvedValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
