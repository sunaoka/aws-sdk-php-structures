<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualService;

trait UpdateVirtualServiceTrait
{
    /**
     * @param UpdateVirtualServiceRequest $args
     * @return UpdateVirtualServiceResponse
     */
    public function updateVirtualService(UpdateVirtualServiceRequest $args)
    {
        $result = parent::updateVirtualService($args->toArray());
        return new UpdateVirtualServiceResponse($result->toArray());
    }
}
