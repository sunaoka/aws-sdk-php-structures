<?php

namespace Sunaoka\Aws\Structures\Wickr\GetGuestUserHistoryCount;

trait GetGuestUserHistoryCountTrait
{
    /**
     * @param GetGuestUserHistoryCountRequest $args
     * @return GetGuestUserHistoryCountResponse
     */
    public function getGuestUserHistoryCount(GetGuestUserHistoryCountRequest $args)
    {
        $result = parent::getGuestUserHistoryCount($args->toArray());
        return new GetGuestUserHistoryCountResponse($result->toArray());
    }
}
