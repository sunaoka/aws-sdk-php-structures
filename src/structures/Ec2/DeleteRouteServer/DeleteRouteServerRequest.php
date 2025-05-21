<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerId
 * @property bool|null $DryRun
 */
class DeleteRouteServerRequest extends Request
{
    /**
     * @param array{
     *     RouteServerId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
