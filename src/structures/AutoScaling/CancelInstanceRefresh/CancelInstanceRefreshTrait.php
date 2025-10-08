<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CancelInstanceRefresh;

trait CancelInstanceRefreshTrait
{
    /**
     * @param CancelInstanceRefreshRequest $args
     * @return CancelInstanceRefreshResponse
     */
    public function cancelInstanceRefresh(CancelInstanceRefreshRequest $args)
    {
        $result = parent::cancelInstanceRefresh($args->toArray());
        return new CancelInstanceRefreshResponse($result->toArray());
    }
}
