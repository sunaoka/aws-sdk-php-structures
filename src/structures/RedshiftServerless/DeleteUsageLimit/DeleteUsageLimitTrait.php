<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteUsageLimit;

trait DeleteUsageLimitTrait
{
    /**
     * @param DeleteUsageLimitRequest $args
     * @return DeleteUsageLimitResponse
     */
    public function deleteUsageLimit(DeleteUsageLimitRequest $args)
    {
        $result = parent::deleteUsageLimit($args->toArray());
        return new DeleteUsageLimitResponse($result->toArray());
    }
}
