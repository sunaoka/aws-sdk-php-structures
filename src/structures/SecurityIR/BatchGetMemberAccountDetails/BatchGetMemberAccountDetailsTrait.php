<?php

namespace Sunaoka\Aws\Structures\SecurityIR\BatchGetMemberAccountDetails;

trait BatchGetMemberAccountDetailsTrait
{
    /**
     * @param BatchGetMemberAccountDetailsRequest $args
     * @return BatchGetMemberAccountDetailsResponse
     */
    public function batchGetMemberAccountDetails(BatchGetMemberAccountDetailsRequest $args)
    {
        $result = parent::batchGetMemberAccountDetails($args->toArray());
        return new BatchGetMemberAccountDetailsResponse($result->toArray());
    }
}
