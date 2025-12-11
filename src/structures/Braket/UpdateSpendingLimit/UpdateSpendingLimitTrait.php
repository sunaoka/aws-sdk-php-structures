<?php

namespace Sunaoka\Aws\Structures\Braket\UpdateSpendingLimit;

trait UpdateSpendingLimitTrait
{
    /**
     * @param UpdateSpendingLimitRequest $args
     * @return UpdateSpendingLimitResponse
     */
    public function updateSpendingLimit(UpdateSpendingLimitRequest $args)
    {
        $result = parent::updateSpendingLimit($args->toArray());
        return new UpdateSpendingLimitResponse($result->toArray());
    }
}
