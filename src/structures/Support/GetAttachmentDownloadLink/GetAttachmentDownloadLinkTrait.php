<?php

namespace Sunaoka\Aws\Structures\Support\GetAttachmentDownloadLink;

trait GetAttachmentDownloadLinkTrait
{
    /**
     * @param GetAttachmentDownloadLinkRequest $args
     * @return GetAttachmentDownloadLinkResponse
     */
    public function getAttachmentDownloadLink(GetAttachmentDownloadLinkRequest $args)
    {
        $result = parent::getAttachmentDownloadLink($args->toArray());
        return new GetAttachmentDownloadLinkResponse($result->toArray());
    }
}
