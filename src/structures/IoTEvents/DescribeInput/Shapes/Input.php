<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputConfiguration|null $inputConfiguration
 * @property InputDefinition|null $inputDefinition
 */
class Input extends Shape
{
    /**
     * @param array{
     *     inputConfiguration?: InputConfiguration|null,
     *     inputDefinition?: InputDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
