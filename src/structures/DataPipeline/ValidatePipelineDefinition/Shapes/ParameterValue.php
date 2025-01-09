<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ValidatePipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $stringValue
 */
class ParameterValue extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     stringValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
