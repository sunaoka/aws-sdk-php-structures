<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableRouteServerPropagation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerId
 * @property string $RouteTableId
 * @property bool|null $DryRun
 */
class EnableRouteServerPropagationRequest extends Request
{
    /**
     * @param array{
     *     RouteServerId: string,
     *     RouteTableId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
