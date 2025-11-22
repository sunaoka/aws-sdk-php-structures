<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSiteToSiteVpnAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $VpnConnectionArn
 * @property string|null $RoutingPolicyLabel
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateSiteToSiteVpnAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     VpnConnectionArn: string,
     *     RoutingPolicyLabel?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
