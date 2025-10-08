<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromJob;

trait DisassociateMemberFromJobTrait
{
    /**
     * @param DisassociateMemberFromJobRequest $args
     * @return DisassociateMemberFromJobResponse
     */
    public function disassociateMemberFromJob(DisassociateMemberFromJobRequest $args)
    {
        $result = parent::disassociateMemberFromJob($args->toArray());
        return new DisassociateMemberFromJobResponse($result->toArray());
    }
}
