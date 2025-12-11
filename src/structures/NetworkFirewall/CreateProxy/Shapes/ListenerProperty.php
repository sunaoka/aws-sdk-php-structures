<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Port
 * @property 'HTTP'|'HTTPS'|null $Type
 */
class ListenerProperty extends Shape
{
    /**
     * @param array{
     *     Port?: int|null,
     *     Type?: 'HTTP'|'HTTPS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
