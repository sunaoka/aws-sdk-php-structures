<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputIp
 * @property int $InputPort
 * @property InterfaceShape $Interface
 */
class InputConfiguration extends Shape
{
    /**
     * @param array{
     *     InputIp: string,
     *     InputPort: int,
     *     Interface: InterfaceShape
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
