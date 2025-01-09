<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 */
class PipelineIdName extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
