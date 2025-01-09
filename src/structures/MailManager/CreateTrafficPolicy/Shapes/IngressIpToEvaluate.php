<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SENDER_IP' $Attribute
 */
class IngressIpToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'SENDER_IP'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
