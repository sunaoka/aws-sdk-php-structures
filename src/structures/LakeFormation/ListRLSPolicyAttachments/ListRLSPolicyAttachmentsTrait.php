<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListRLSPolicyAttachments;

trait ListRLSPolicyAttachmentsTrait
{
    /**
     * @param ListRLSPolicyAttachmentsRequest $args
     * @return ListRLSPolicyAttachmentsResponse
     */
    public function listRLSPolicyAttachments(ListRLSPolicyAttachmentsRequest $args)
    {
        $result = parent::listRLSPolicyAttachments($args->toArray());
        return new ListRLSPolicyAttachmentsResponse($result->toArray());
    }
}
