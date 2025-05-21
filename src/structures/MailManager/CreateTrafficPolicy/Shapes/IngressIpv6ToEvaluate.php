<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SENDER_IPV6'|null $Attribute
 */
class IngressIpv6ToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'SENDER_IPV6'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
