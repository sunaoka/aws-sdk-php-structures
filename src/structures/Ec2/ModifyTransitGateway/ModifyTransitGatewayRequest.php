<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property string $Description
 * @property Shapes\ModifyTransitGatewayOptions $Options
 * @property bool $DryRun
 */
class ModifyTransitGatewayRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     Description?: string,
     *     Options?: Shapes\ModifyTransitGatewayOptions,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
