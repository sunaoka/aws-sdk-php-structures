<?php

namespace Sunaoka\Aws\Structures\Braket\CreateSpendingLimit;

trait CreateSpendingLimitTrait
{
    /**
     * @param CreateSpendingLimitRequest $args
     * @return CreateSpendingLimitResponse
     */
    public function createSpendingLimit(CreateSpendingLimitRequest $args)
    {
        $result = parent::createSpendingLimit($args->toArray());
        return new CreateSpendingLimitResponse($result->toArray());
    }
}
