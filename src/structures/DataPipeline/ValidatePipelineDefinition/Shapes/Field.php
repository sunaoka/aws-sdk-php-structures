<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ValidatePipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string|null $stringValue
 * @property string|null $refValue
 */
class Field extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     stringValue?: string|null,
     *     refValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
