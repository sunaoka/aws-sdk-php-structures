<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TLS_PROTOCOL'|null $Attribute
 */
class IngressTlsProtocolToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'TLS_PROTOCOL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
