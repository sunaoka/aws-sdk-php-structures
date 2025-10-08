<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListAttachments;

trait ListAttachmentsTrait
{
    /**
     * @param ListAttachmentsRequest $args
     * @return ListAttachmentsResponse
     */
    public function listAttachments(ListAttachmentsRequest $args)
    {
        $result = parent::listAttachments($args->toArray());
        return new ListAttachmentsResponse($result->toArray());
    }
}
