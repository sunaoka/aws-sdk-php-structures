<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListProxies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'envoy'|null $type
 * @property string|null $dnsName
 * @property string|null $vpcId
 * @property ProxyStatus|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class ProxySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'envoy'|null,
     *     dnsName?: string|null,
     *     vpcId?: string|null,
     *     status?: ProxyStatus|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
