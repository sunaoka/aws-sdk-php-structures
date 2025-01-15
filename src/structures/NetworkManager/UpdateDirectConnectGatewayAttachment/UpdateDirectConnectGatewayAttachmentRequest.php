<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateDirectConnectGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 * @property list<string>|null $EdgeLocations
 */
class UpdateDirectConnectGatewayAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentId: string,
     *     EdgeLocations?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
