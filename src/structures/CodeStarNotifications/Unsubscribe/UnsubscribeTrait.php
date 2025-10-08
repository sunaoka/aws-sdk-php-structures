<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\Unsubscribe;

trait UnsubscribeTrait
{
    /**
     * @param UnsubscribeRequest $args
     * @return UnsubscribeResponse
     */
    public function unsubscribe(UnsubscribeRequest $args)
    {
        $result = parent::unsubscribe($args->toArray());
        return new UnsubscribeResponse($result->toArray());
    }
}
