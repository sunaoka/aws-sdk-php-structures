<?php

namespace Sunaoka\Aws\Structures\drs\CreateSourceNetwork;

trait CreateSourceNetworkTrait
{
    /**
     * @param CreateSourceNetworkRequest $args
     * @return CreateSourceNetworkResponse
     */
    public function createSourceNetwork(CreateSourceNetworkRequest $args)
    {
        $result = parent::createSourceNetwork($args->toArray());
        return new CreateSourceNetworkResponse($result->toArray());
    }
}
