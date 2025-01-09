<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeSSLPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SslProtocols
 * @property list<Cipher> $Ciphers
 * @property string $Name
 * @property list<string> $SupportedLoadBalancerTypes
 */
class SslPolicy extends Shape
{
    /**
     * @param array{
     *     SslProtocols?: list<string>,
     *     Ciphers?: list<Cipher>,
     *     Name?: string,
     *     SupportedLoadBalancerTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
