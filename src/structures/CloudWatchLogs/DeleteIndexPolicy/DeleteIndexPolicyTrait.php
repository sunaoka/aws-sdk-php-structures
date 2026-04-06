<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteIndexPolicy;

trait DeleteIndexPolicyTrait
{
    /**
     * @param DeleteIndexPolicyRequest $args
     * @return DeleteIndexPolicyResponse
     */
    public function deleteIndexPolicy(DeleteIndexPolicyRequest $args)
    {
        $result = parent::deleteIndexPolicy($args->toArray());
        return new DeleteIndexPolicyResponse($result->toArray());
    }
}
