<?php

namespace Sunaoka\Aws\Structures\AutoScaling\RollbackInstanceRefresh;

trait RollbackInstanceRefreshTrait
{
    /**
     * @param RollbackInstanceRefreshRequest $args
     * @return RollbackInstanceRefreshResponse
     */
    public function rollbackInstanceRefresh(RollbackInstanceRefreshRequest $args)
    {
        $result = parent::rollbackInstanceRefresh($args->toArray());
        return new RollbackInstanceRefreshResponse($result->toArray());
    }
}
