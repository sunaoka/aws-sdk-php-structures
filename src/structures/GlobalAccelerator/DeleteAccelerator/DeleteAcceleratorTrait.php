<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteAccelerator;

trait DeleteAcceleratorTrait
{
    /**
     * @param DeleteAcceleratorRequest $args
     * @return void
     */
    public function deleteAccelerator(DeleteAcceleratorRequest $args)
    {
        parent::deleteAccelerator($args->toArray());
    }
}
