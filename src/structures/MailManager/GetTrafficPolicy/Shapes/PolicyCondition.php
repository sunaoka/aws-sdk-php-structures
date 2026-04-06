<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressStringExpression|null $StringExpression
 * @property IngressIpv4Expression|null $IpExpression
 * @property IngressIpv6Expression|null $Ipv6Expression
 * @property IngressTlsProtocolExpression|null $TlsExpression
 * @property IngressBooleanExpression|null $BooleanExpression
 */
class PolicyCondition extends Shape
{
    /**
     * @param array{
     *     StringExpression?: IngressStringExpression|null,
     *     IpExpression?: IngressIpv4Expression|null,
     *     Ipv6Expression?: IngressIpv6Expression|null,
     *     TlsExpression?: IngressTlsProtocolExpression|null,
     *     BooleanExpression?: IngressBooleanExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
