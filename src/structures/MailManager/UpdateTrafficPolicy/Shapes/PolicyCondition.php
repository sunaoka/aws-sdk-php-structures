<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressBooleanExpression $BooleanExpression
 * @property IngressIpv4Expression $IpExpression
 * @property IngressStringExpression $StringExpression
 * @property IngressTlsProtocolExpression $TlsExpression
 */
class PolicyCondition extends Shape
{
    /**
     * @param array{
     *     BooleanExpression?: IngressBooleanExpression,
     *     IpExpression?: IngressIpv4Expression,
     *     StringExpression?: IngressStringExpression,
     *     TlsExpression?: IngressTlsProtocolExpression
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
