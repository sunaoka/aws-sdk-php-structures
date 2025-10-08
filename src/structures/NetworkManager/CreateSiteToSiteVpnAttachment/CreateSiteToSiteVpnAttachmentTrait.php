<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSiteToSiteVpnAttachment;

trait CreateSiteToSiteVpnAttachmentTrait
{
    /**
     * @param CreateSiteToSiteVpnAttachmentRequest $args
     * @return CreateSiteToSiteVpnAttachmentResponse
     */
    public function createSiteToSiteVpnAttachment(CreateSiteToSiteVpnAttachmentRequest $args)
    {
        $result = parent::createSiteToSiteVpnAttachment($args->toArray());
        return new CreateSiteToSiteVpnAttachmentResponse($result->toArray());
    }
}
