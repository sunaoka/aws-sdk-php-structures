<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToJob;

trait AssociateMemberToJobTrait
{
    /**
     * @param AssociateMemberToJobRequest $args
     * @return AssociateMemberToJobResponse
     */
    public function associateMemberToJob(AssociateMemberToJobRequest $args)
    {
        $result = parent::associateMemberToJob($args->toArray());
        return new AssociateMemberToJobResponse($result->toArray());
    }
}
