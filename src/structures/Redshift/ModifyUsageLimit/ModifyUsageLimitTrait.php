<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyUsageLimit;

trait ModifyUsageLimitTrait
{
    /**
     * @param ModifyUsageLimitRequest $args
     * @return ModifyUsageLimitResponse
     */
    public function modifyUsageLimit(ModifyUsageLimitRequest $args)
    {
        $result = parent::modifyUsageLimit($args->toArray());
        return new ModifyUsageLimitResponse($result->toArray());
    }
}
