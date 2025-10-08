<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh;

trait StartInstanceRefreshTrait
{
    /**
     * @param StartInstanceRefreshRequest $args
     * @return StartInstanceRefreshResponse
     */
    public function startInstanceRefresh(StartInstanceRefreshRequest $args)
    {
        $result = parent::startInstanceRefresh($args->toArray());
        return new StartInstanceRefreshResponse($result->toArray());
    }
}
