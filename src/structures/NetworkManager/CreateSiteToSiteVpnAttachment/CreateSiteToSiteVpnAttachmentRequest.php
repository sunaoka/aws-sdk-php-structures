<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSiteToSiteVpnAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $VpnConnectionArn
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateSiteToSiteVpnAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     VpnConnectionArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
