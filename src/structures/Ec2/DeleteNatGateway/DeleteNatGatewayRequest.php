<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNatGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NatGatewayId
 */
class DeleteNatGatewayRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NatGatewayId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
