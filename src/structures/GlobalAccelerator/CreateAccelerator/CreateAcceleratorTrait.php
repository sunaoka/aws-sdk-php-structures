<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateAccelerator;

trait CreateAcceleratorTrait
{
    /**
     * @param CreateAcceleratorRequest $args
     * @return CreateAcceleratorResponse
     */
    public function createAccelerator(CreateAcceleratorRequest $args)
    {
        $result = parent::createAccelerator($args->toArray());
        return new CreateAcceleratorResponse($result->toArray());
    }
}
