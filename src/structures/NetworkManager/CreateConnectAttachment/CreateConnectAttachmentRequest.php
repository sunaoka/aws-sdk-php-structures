<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $EdgeLocation
 * @property string $TransportAttachmentId
 * @property Shapes\ConnectAttachmentOptions $Options
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateConnectAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     EdgeLocation: string,
     *     TransportAttachmentId: string,
     *     Options: Shapes\ConnectAttachmentOptions,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
