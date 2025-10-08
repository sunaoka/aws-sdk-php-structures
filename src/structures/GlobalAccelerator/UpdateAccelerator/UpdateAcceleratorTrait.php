<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateAccelerator;

trait UpdateAcceleratorTrait
{
    /**
     * @param UpdateAcceleratorRequest $args
     * @return UpdateAcceleratorResponse
     */
    public function updateAccelerator(UpdateAcceleratorRequest $args)
    {
        $result = parent::updateAccelerator($args->toArray());
        return new UpdateAcceleratorResponse($result->toArray());
    }
}
