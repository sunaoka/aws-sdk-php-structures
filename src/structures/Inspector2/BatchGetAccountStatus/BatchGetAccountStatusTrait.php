<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus;

trait BatchGetAccountStatusTrait
{
    /**
     * @param BatchGetAccountStatusRequest $args
     * @return BatchGetAccountStatusResponse
     */
    public function batchGetAccountStatus(BatchGetAccountStatusRequest $args)
    {
        $result = parent::batchGetAccountStatus($args->toArray());
        return new BatchGetAccountStatusResponse($result->toArray());
    }
}
