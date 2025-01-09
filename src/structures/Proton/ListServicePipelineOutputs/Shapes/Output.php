<?php

namespace Sunaoka\Aws\Structures\Proton\ListServicePipelineOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $valueString
 */
class Output extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     valueString?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
