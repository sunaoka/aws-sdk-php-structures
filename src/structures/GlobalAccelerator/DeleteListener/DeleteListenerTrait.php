<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteListener;

trait DeleteListenerTrait
{
    /**
     * @param DeleteListenerRequest $args
     * @return void
     */
    public function deleteListener(DeleteListenerRequest $args)
    {
        parent::deleteListener($args->toArray());
    }
}
