<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetSiteToSiteVpnAttachment;

trait GetSiteToSiteVpnAttachmentTrait
{
    /**
     * @param GetSiteToSiteVpnAttachmentRequest $args
     * @return GetSiteToSiteVpnAttachmentResponse
     */
    public function getSiteToSiteVpnAttachment(GetSiteToSiteVpnAttachmentRequest $args)
    {
        $result = parent::getSiteToSiteVpnAttachment($args->toArray());
        return new GetSiteToSiteVpnAttachmentResponse($result->toArray());
    }
}
