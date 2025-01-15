<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransportTransitGatewayAttachmentId
 * @property Shapes\CreateTransitGatewayConnectRequestOptions $Options
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayConnectRequest extends Request
{
    /**
     * @param array{
     *     TransportTransitGatewayAttachmentId: string,
     *     Options: Shapes\CreateTransitGatewayConnectRequestOptions,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
