<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TLS_PROTOCOL' $Attribute
 */
class IngressTlsProtocolToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'TLS_PROTOCOL'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
