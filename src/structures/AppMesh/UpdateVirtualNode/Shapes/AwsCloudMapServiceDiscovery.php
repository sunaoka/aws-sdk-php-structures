<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCloudMapInstanceAttribute> $attributes
 * @property 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY' $ipPreference
 * @property string $namespaceName
 * @property string $serviceName
 */
class AwsCloudMapServiceDiscovery extends Shape
{
    /**
     * @param array{
     *     attributes?: list<AwsCloudMapInstanceAttribute>,
     *     ipPreference?: 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY',
     *     namespaceName: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
