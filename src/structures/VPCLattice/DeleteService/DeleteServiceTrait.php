<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteService;

trait DeleteServiceTrait
{
    /**
     * @param DeleteServiceRequest $args
     * @return DeleteServiceResponse
     */
    public function deleteService(DeleteServiceRequest $args)
    {
        $result = parent::deleteService($args->toArray());
        return new DeleteServiceResponse($result->toArray());
    }
}
