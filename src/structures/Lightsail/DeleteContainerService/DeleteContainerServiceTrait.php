<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteContainerService;

trait DeleteContainerServiceTrait
{
    /**
     * @param DeleteContainerServiceRequest $args
     * @return DeleteContainerServiceResponse
     */
    public function deleteContainerService(DeleteContainerServiceRequest $args)
    {
        $result = parent::deleteContainerService($args->toArray());
        return new DeleteContainerServiceResponse($result->toArray());
    }
}
