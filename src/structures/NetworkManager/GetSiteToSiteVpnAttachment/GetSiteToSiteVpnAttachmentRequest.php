<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetSiteToSiteVpnAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 */
class GetSiteToSiteVpnAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
