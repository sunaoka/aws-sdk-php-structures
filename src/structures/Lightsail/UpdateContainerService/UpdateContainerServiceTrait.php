<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateContainerService;

trait UpdateContainerServiceTrait
{
    /**
     * @param UpdateContainerServiceRequest $args
     * @return UpdateContainerServiceResponse
     */
    public function updateContainerService(UpdateContainerServiceRequest $args)
    {
        $result = parent::updateContainerService($args->toArray());
        return new UpdateContainerServiceResponse($result->toArray());
    }
}
