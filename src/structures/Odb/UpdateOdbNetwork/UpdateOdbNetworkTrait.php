<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateOdbNetwork;

trait UpdateOdbNetworkTrait
{
    /**
     * @param UpdateOdbNetworkRequest $args
     * @return UpdateOdbNetworkResponse
     */
    public function updateOdbNetwork(UpdateOdbNetworkRequest $args)
    {
        $result = parent::updateOdbNetwork($args->toArray());
        return new UpdateOdbNetworkResponse($result->toArray());
    }
}
