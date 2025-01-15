<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeSSLPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SslProtocols
 * @property list<Cipher>|null $Ciphers
 * @property string|null $Name
 * @property list<string>|null $SupportedLoadBalancerTypes
 */
class SslPolicy extends Shape
{
    /**
     * @param array{
     *     SslProtocols?: list<string>|null,
     *     Ciphers?: list<Cipher>|null,
     *     Name?: string|null,
     *     SupportedLoadBalancerTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
