<?php

namespace Sunaoka\Aws\Structures\Support\GetAttachmentUploadLinks;

trait GetAttachmentUploadLinksTrait
{
    /**
     * @param GetAttachmentUploadLinksRequest $args
     * @return GetAttachmentUploadLinksResponse
     */
    public function getAttachmentUploadLinks(GetAttachmentUploadLinksRequest $args)
    {
        $result = parent::getAttachmentUploadLinks($args->toArray());
        return new GetAttachmentUploadLinksResponse($result->toArray());
    }
}
