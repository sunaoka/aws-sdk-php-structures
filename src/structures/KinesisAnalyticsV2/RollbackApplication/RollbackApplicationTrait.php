<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication;

trait RollbackApplicationTrait
{
    /**
     * @param RollbackApplicationRequest $args
     * @return RollbackApplicationResponse
     */
    public function rollbackApplication(RollbackApplicationRequest $args)
    {
        $result = parent::rollbackApplication($args->toArray());
        return new RollbackApplicationResponse($result->toArray());
    }
}
