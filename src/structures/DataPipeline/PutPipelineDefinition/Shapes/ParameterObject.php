<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PutPipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property list<ParameterAttribute> $attributes
 */
class ParameterObject extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     attributes: list<ParameterAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
