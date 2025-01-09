<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressIpToEvaluate $Evaluate
 * @property 'CIDR_MATCHES'|'NOT_CIDR_MATCHES' $Operator
 * @property list<string> $Values
 */
class IngressIpv4Expression extends Shape
{
    /**
     * @param array{
     *     Evaluate: IngressIpToEvaluate,
     *     Operator: 'CIDR_MATCHES'|'NOT_CIDR_MATCHES',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
