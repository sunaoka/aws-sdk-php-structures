<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SENDER_IP'|null $Attribute
 */
class IngressIpToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'SENDER_IP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
