<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateService;

trait CreateServiceTrait
{
    /**
     * @param CreateServiceRequest $args
     * @return CreateServiceResponse
     */
    public function createService(CreateServiceRequest $args)
    {
        $result = parent::createService($args->toArray());
        return new CreateServiceResponse($result->toArray());
    }
}
