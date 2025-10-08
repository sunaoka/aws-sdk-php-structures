<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateUsageLimit;

trait CreateUsageLimitTrait
{
    /**
     * @param CreateUsageLimitRequest $args
     * @return CreateUsageLimitResponse
     */
    public function createUsageLimit(CreateUsageLimitRequest $args)
    {
        $result = parent::createUsageLimit($args->toArray());
        return new CreateUsageLimitResponse($result->toArray());
    }
}
