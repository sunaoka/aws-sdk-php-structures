<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateListener;

trait UpdateListenerTrait
{
    /**
     * @param UpdateListenerRequest $args
     * @return UpdateListenerResponse
     */
    public function updateListener(UpdateListenerRequest $args)
    {
        $result = parent::updateListener($args->toArray());
        return new UpdateListenerResponse($result->toArray());
    }
}
