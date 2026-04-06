<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Port
 * @property 'HTTP'|'HTTPS' $Type
 */
class ListenerPropertyRequest extends Shape
{
    /**
     * @param array{
     *     Port: int,
     *     Type: 'HTTP'|'HTTPS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
