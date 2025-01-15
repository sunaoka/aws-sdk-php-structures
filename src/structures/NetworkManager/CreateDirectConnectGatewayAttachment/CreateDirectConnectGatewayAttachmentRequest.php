<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDirectConnectGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $DirectConnectGatewayArn
 * @property list<string> $EdgeLocations
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateDirectConnectGatewayAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     DirectConnectGatewayArn: string,
     *     EdgeLocations: list<string>,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
