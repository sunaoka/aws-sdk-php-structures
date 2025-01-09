<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PutPipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $stringValue
 * @property string $refValue
 */
class Field extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     stringValue?: string,
     *     refValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
