<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCarrierGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CarrierGatewayId
 * @property bool $DryRun
 */
class DeleteCarrierGatewayRequest extends Request
{
    /**
     * @param array{
     *     CarrierGatewayId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
