<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property bool|null $DryRun
 */
class DeleteTransitGatewayRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
