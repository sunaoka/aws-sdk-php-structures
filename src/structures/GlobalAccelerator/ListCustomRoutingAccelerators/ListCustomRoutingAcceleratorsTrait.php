<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingAccelerators;

trait ListCustomRoutingAcceleratorsTrait
{
    /**
     * @param ListCustomRoutingAcceleratorsRequest $args
     * @return ListCustomRoutingAcceleratorsResponse
     */
    public function listCustomRoutingAccelerators(ListCustomRoutingAcceleratorsRequest $args)
    {
        $result = parent::listCustomRoutingAccelerators($args->toArray());
        return new ListCustomRoutingAcceleratorsResponse($result->toArray());
    }
}
