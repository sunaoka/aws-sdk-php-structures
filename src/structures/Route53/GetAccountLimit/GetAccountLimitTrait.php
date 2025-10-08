<?php

namespace Sunaoka\Aws\Structures\Route53\GetAccountLimit;

trait GetAccountLimitTrait
{
    /**
     * @param GetAccountLimitRequest $args
     * @return GetAccountLimitResponse
     */
    public function getAccountLimit(GetAccountLimitRequest $args)
    {
        $result = parent::getAccountLimit($args->toArray());
        return new GetAccountLimitResponse($result->toArray());
    }
}
