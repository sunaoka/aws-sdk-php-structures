<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransportTransitGatewayAttachmentId
 * @property Shapes\CreateTransitGatewayConnectRequestOptions $Options
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayConnectRequest extends Request
{
    /**
     * @param array{
     *     TransportTransitGatewayAttachmentId: string,
     *     Options: Shapes\CreateTransitGatewayConnectRequestOptions,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
