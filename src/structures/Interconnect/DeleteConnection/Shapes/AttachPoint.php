<?php

namespace Sunaoka\Aws\Structures\Interconnect\DeleteConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $directConnectGateway
 * @property string|null $arn
 */
class AttachPoint extends Shape
{
    /**
     * @param array{
     *     directConnectGateway?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
