<?php

namespace Sunaoka\Aws\Structures\Braket\DeleteSpendingLimit;

trait DeleteSpendingLimitTrait
{
    /**
     * @param DeleteSpendingLimitRequest $args
     * @return DeleteSpendingLimitResponse
     */
    public function deleteSpendingLimit(DeleteSpendingLimitRequest $args)
    {
        $result = parent::deleteSpendingLimit($args->toArray());
        return new DeleteSpendingLimitResponse($result->toArray());
    }
}
