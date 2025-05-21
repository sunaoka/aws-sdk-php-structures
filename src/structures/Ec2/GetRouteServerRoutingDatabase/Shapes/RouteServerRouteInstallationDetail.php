<?php

namespace Sunaoka\Aws\Structures\Ec2\GetRouteServerRoutingDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouteTableId
 * @property 'installed'|'rejected'|null $RouteInstallationStatus
 * @property string|null $RouteInstallationStatusReason
 */
class RouteServerRouteInstallationDetail extends Shape
{
    /**
     * @param array{
     *     RouteTableId?: string|null,
     *     RouteInstallationStatus?: 'installed'|'rejected'|null,
     *     RouteInstallationStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
