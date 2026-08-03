<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cidr
 * @property 'accepted'|'advertised'|null $routeDirection
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property list<AsPathSegment>|null $asPath
 * @property list<string>|null $communities
 * @property string|null $awsLogicalDeviceId
 * @property \Aws\Api\DateTimeResult|null $routeInstalledAt
 */
class Route extends Shape
{
    /**
     * @param array{
     *     cidr?: string|null,
     *     routeDirection?: 'accepted'|'advertised'|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     asPath?: list<AsPathSegment>|null,
     *     communities?: list<string>|null,
     *     awsLogicalDeviceId?: string|null,
     *     routeInstalledAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
