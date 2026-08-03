<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'accepted'|'advertised'|null $routeDirection
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property list<string>|null $cidrs
 * @property list<int>|null $asPath
 * @property list<string>|null $communities
 */
class RouteFilters extends Shape
{
    /**
     * @param array{
     *     routeDirection?: 'accepted'|'advertised'|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     cidrs?: list<string>|null,
     *     asPath?: list<int>|null,
     *     communities?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
