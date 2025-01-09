<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableVgwRoutePropagation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayId
 * @property string $RouteTableId
 * @property bool $DryRun
 */
class DisableVgwRoutePropagationRequest extends Request
{
    /**
     * @param array{
     *     GatewayId: string,
     *     RouteTableId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
