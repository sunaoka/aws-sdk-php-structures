<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingAccelerator;

trait CreateCustomRoutingAcceleratorTrait
{
    /**
     * @param CreateCustomRoutingAcceleratorRequest $args
     * @return CreateCustomRoutingAcceleratorResponse
     */
    public function createCustomRoutingAccelerator(CreateCustomRoutingAcceleratorRequest $args)
    {
        $result = parent::createCustomRoutingAccelerator($args->toArray());
        return new CreateCustomRoutingAcceleratorResponse($result->toArray());
    }
}
