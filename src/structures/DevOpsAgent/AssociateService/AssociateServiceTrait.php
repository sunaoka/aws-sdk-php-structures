<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService;

trait AssociateServiceTrait
{
    /**
     * @param AssociateServiceRequest $args
     * @return AssociateServiceResponse
     */
    public function associateService(AssociateServiceRequest $args)
    {
        $result = parent::associateService($args->toArray());
        return new AssociateServiceResponse($result->toArray());
    }
}
