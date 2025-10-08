<?php

namespace Sunaoka\Aws\Structures\Tnb\TerminateSolNetworkInstance;

trait TerminateSolNetworkInstanceTrait
{
    /**
     * @param TerminateSolNetworkInstanceRequest $args
     * @return TerminateSolNetworkInstanceResponse
     */
    public function terminateSolNetworkInstance(TerminateSolNetworkInstanceRequest $args)
    {
        $result = parent::terminateSolNetworkInstance($args->toArray());
        return new TerminateSolNetworkInstanceResponse($result->toArray());
    }
}
