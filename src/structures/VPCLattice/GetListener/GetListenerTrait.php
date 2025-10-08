<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetListener;

trait GetListenerTrait
{
    /**
     * @param GetListenerRequest $args
     * @return GetListenerResponse
     */
    public function getListener(GetListenerRequest $args)
    {
        $result = parent::getListener($args->toArray());
        return new GetListenerResponse($result->toArray());
    }
}
