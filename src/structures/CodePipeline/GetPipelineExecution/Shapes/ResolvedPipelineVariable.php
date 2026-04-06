<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $resolvedValue
 */
class ResolvedPipelineVariable extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     resolvedValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
