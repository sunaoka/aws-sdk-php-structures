<?php

namespace Sunaoka\Aws\Structures\Sns\Subscribe;

trait SubscribeTrait
{
    /**
     * @param SubscribeRequest $args
     * @return SubscribeResponse
     */
    public function subscribe(SubscribeRequest $args)
    {
        $result = parent::subscribe($args->toArray());
        return new SubscribeResponse($result->toArray());
    }
}
