<?php

namespace Sunaoka\Aws\Structures\Wickr\DeleteNetwork;

trait DeleteNetworkTrait
{
    /**
     * @param DeleteNetworkRequest $args
     * @return DeleteNetworkResponse
     */
    public function deleteNetwork(DeleteNetworkRequest $args)
    {
        $result = parent::deleteNetwork($args->toArray());
        return new DeleteNetworkResponse($result->toArray());
    }
}
