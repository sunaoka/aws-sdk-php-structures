<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InputPort
 * @property InterfaceRequest $Interface
 */
class InputConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     InputPort: int,
     *     Interface: InterfaceRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
