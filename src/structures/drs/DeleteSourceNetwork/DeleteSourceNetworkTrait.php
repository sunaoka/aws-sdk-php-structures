<?php

namespace Sunaoka\Aws\Structures\drs\DeleteSourceNetwork;

trait DeleteSourceNetworkTrait
{
    /**
     * @param DeleteSourceNetworkRequest $args
     * @return DeleteSourceNetworkResponse
     */
    public function deleteSourceNetwork(DeleteSourceNetworkRequest $args)
    {
        $result = parent::deleteSourceNetwork($args->toArray());
        return new DeleteSourceNetworkResponse($result->toArray());
    }
}
