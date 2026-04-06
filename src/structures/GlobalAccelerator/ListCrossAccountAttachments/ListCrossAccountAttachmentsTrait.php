<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountAttachments;

trait ListCrossAccountAttachmentsTrait
{
    /**
     * @param ListCrossAccountAttachmentsRequest $args
     * @return ListCrossAccountAttachmentsResponse
     */
    public function listCrossAccountAttachments(ListCrossAccountAttachmentsRequest $args)
    {
        $result = parent::listCrossAccountAttachments($args->toArray());
        return new ListCrossAccountAttachmentsResponse($result->toArray());
    }
}
