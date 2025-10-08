<?php

namespace Sunaoka\Aws\Structures\SsmSap\StartApplicationRefresh;

trait StartApplicationRefreshTrait
{
    /**
     * @param StartApplicationRefreshRequest $args
     * @return StartApplicationRefreshResponse
     */
    public function startApplicationRefresh(StartApplicationRefreshRequest $args)
    {
        $result = parent::startApplicationRefresh($args->toArray());
        return new StartApplicationRefreshResponse($result->toArray());
    }
}
