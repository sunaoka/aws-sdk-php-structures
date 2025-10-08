<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService;

trait CreateContainerServiceTrait
{
    /**
     * @param CreateContainerServiceRequest $args
     * @return CreateContainerServiceResponse
     */
    public function createContainerService(CreateContainerServiceRequest $args)
    {
        $result = parent::createContainerService($args->toArray());
        return new CreateContainerServiceResponse($result->toArray());
    }
}
