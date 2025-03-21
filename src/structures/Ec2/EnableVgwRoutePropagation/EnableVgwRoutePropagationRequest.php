<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVgwRoutePropagation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayId
 * @property string $RouteTableId
 * @property bool|null $DryRun
 */
class EnableVgwRoutePropagationRequest extends Request
{
    /**
     * @param array{
     *     GatewayId: string,
     *     RouteTableId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
