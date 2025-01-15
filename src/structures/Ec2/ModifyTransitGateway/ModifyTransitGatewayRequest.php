<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property string|null $Description
 * @property Shapes\ModifyTransitGatewayOptions|null $Options
 * @property bool|null $DryRun
 */
class ModifyTransitGatewayRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     Description?: string|null,
     *     Options?: Shapes\ModifyTransitGatewayOptions|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
