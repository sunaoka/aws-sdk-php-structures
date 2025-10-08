<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCustomRoutingListener;

trait DeleteCustomRoutingListenerTrait
{
    /**
     * @param DeleteCustomRoutingListenerRequest $args
     * @return void
     */
    public function deleteCustomRoutingListener(DeleteCustomRoutingListenerRequest $args)
    {
        parent::deleteCustomRoutingListener($args->toArray());
    }
}
