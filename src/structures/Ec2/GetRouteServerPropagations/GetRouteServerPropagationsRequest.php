<?php

namespace Sunaoka\Aws\Structures\Ec2\GetRouteServerPropagations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerId
 * @property string|null $RouteTableId
 * @property bool|null $DryRun
 */
class GetRouteServerPropagationsRequest extends Request
{
    /**
     * @param array{
     *     RouteServerId: string,
     *     RouteTableId?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
