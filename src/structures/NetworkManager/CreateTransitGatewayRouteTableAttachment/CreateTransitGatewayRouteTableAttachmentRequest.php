<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayRouteTableAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PeeringId
 * @property string $TransitGatewayRouteTableArn
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateTransitGatewayRouteTableAttachmentRequest extends Request
{
    /**
     * @param array{
     *     PeeringId: string,
     *     TransitGatewayRouteTableArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
