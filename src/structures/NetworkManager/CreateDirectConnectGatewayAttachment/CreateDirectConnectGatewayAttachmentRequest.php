<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDirectConnectGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $DirectConnectGatewayArn
 * @property list<string> $EdgeLocations
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateDirectConnectGatewayAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     DirectConnectGatewayArn: string,
     *     EdgeLocations: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
