<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputConfiguration $inputConfiguration
 * @property InputDefinition $inputDefinition
 */
class Input extends Shape
{
    /**
     * @param array{
     *     inputConfiguration?: InputConfiguration,
     *     inputDefinition?: InputDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
