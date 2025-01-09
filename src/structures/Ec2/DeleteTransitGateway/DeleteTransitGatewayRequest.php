<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property bool $DryRun
 */
class DeleteTransitGatewayRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
