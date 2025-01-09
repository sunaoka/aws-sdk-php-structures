<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ValidatePipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $stringValue
 */
class ParameterAttribute extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     stringValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
