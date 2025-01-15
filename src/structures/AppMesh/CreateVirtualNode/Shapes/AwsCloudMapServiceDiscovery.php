<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCloudMapInstanceAttribute>|null $attributes
 * @property 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY'|null $ipPreference
 * @property string $namespaceName
 * @property string $serviceName
 */
class AwsCloudMapServiceDiscovery extends Shape
{
    /**
     * @param array{
     *     attributes?: list<AwsCloudMapInstanceAttribute>|null,
     *     ipPreference?: 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY'|null,
     *     namespaceName: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
