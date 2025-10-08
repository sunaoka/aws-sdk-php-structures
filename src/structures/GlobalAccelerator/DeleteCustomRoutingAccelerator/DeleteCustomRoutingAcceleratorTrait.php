<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCustomRoutingAccelerator;

trait DeleteCustomRoutingAcceleratorTrait
{
    /**
     * @param DeleteCustomRoutingAcceleratorRequest $args
     * @return void
     */
    public function deleteCustomRoutingAccelerator(DeleteCustomRoutingAcceleratorRequest $args)
    {
        parent::deleteCustomRoutingAccelerator($args->toArray());
    }
}
