<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualService;

trait DeleteVirtualServiceTrait
{
    /**
     * @param DeleteVirtualServiceRequest $args
     * @return DeleteVirtualServiceResponse
     */
    public function deleteVirtualService(DeleteVirtualServiceRequest $args)
    {
        $result = parent::deleteVirtualService($args->toArray());
        return new DeleteVirtualServiceResponse($result->toArray());
    }
}
