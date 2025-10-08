<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteUsageLimit;

trait DeleteUsageLimitTrait
{
    /**
     * @param DeleteUsageLimitRequest $args
     * @return void
     */
    public function deleteUsageLimit(DeleteUsageLimitRequest $args)
    {
        parent::deleteUsageLimit($args->toArray());
    }
}
