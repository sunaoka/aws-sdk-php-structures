<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ListenerProperty> $ListenerProperties
 */
class ProxySettings extends Shape
{
    /**
     * @param array{ListenerProperties: list<ListenerProperty>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
