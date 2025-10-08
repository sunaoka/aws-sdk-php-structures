<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteListener;

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
