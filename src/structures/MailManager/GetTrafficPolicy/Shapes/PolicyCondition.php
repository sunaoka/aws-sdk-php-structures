<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressBooleanExpression|null $BooleanExpression
 * @property IngressIpv4Expression|null $IpExpression
 * @property IngressStringExpression|null $StringExpression
 * @property IngressTlsProtocolExpression|null $TlsExpression
 */
class PolicyCondition extends Shape
{
    /**
     * @param array{
     *     BooleanExpression?: IngressBooleanExpression|null,
     *     IpExpression?: IngressIpv4Expression|null,
     *     StringExpression?: IngressStringExpression|null,
     *     TlsExpression?: IngressTlsProtocolExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
