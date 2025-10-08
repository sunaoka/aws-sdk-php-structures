<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteListener;

trait DeleteListenerTrait
{
    /**
     * @param DeleteListenerRequest $args
     * @return DeleteListenerResponse
     */
    public function deleteListener(DeleteListenerRequest $args)
    {
        $result = parent::deleteListener($args->toArray());
        return new DeleteListenerResponse($result->toArray());
    }
}
