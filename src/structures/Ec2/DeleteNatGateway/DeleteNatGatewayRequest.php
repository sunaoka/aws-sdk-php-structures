<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNatGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NatGatewayId
 */
class DeleteNatGatewayRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NatGatewayId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
