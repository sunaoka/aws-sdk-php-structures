<?php

namespace Sunaoka\Aws\Structures\Sns\Unsubscribe;

trait UnsubscribeTrait
{
    /**
     * @param UnsubscribeRequest $args
     * @return void
     */
    public function unsubscribe(UnsubscribeRequest $args)
    {
        parent::unsubscribe($args->toArray());
    }
}
