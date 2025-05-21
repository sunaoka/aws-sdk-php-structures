<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerEndpointId
 * @property bool|null $DryRun
 */
class DeleteRouteServerEndpointRequest extends Request
{
    /**
     * @param array{
     *     RouteServerEndpointId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
