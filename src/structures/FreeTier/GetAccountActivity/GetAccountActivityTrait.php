<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetAccountActivity;

trait GetAccountActivityTrait
{
    /**
     * @param GetAccountActivityRequest $args
     * @return GetAccountActivityResponse
     */
    public function getAccountActivity(GetAccountActivityRequest $args)
    {
        $result = parent::getAccountActivity($args->toArray());
        return new GetAccountActivityResponse($result->toArray());
    }
}
