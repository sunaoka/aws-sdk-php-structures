<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSiteToSiteVpnAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $VpnConnectionArn
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateSiteToSiteVpnAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     VpnConnectionArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
