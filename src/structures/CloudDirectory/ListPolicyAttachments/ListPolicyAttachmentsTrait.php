<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListPolicyAttachments;

trait ListPolicyAttachmentsTrait
{
    /**
     * @param ListPolicyAttachmentsRequest $args
     * @return ListPolicyAttachmentsResponse
     */
    public function listPolicyAttachments(ListPolicyAttachmentsRequest $args)
    {
        $result = parent::listPolicyAttachments($args->toArray());
        return new ListPolicyAttachmentsResponse($result->toArray());
    }
}
