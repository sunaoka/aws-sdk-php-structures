<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressTlsProtocolToEvaluate $Evaluate
 * @property 'MINIMUM_TLS_VERSION'|'IS' $Operator
 * @property 'TLS1_2'|'TLS1_3' $Value
 */
class IngressTlsProtocolExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: IngressTlsProtocolToEvaluate,
     *     Operator: 'MINIMUM_TLS_VERSION'|'IS',
     *     Value: 'TLS1_2'|'TLS1_3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
