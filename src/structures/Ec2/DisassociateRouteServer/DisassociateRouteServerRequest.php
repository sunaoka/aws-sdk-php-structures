<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateRouteServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerId
 * @property string $VpcId
 * @property bool|null $DryRun
 */
class DisassociateRouteServerRequest extends Request
{
    /**
     * @param array{
     *     RouteServerId: string,
     *     VpcId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
