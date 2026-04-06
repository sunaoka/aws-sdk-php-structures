<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateLayer;

trait CreateLayerTrait
{
    /**
     * @param CreateLayerRequest $args
     * @return CreateLayerResponse
     */
    public function createLayer(CreateLayerRequest $args)
    {
        $result = parent::createLayer($args->toArray());
        return new CreateLayerResponse($result->toArray());
    }
}
