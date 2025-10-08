<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService;

trait CreateVirtualServiceTrait
{
    /**
     * @param CreateVirtualServiceRequest $args
     * @return CreateVirtualServiceResponse
     */
    public function createVirtualService(CreateVirtualServiceRequest $args)
    {
        $result = parent::createVirtualService($args->toArray());
        return new CreateVirtualServiceResponse($result->toArray());
    }
}
