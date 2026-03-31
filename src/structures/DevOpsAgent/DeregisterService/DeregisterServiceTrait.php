<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeregisterService;

trait DeregisterServiceTrait
{
    /**
     * @param DeregisterServiceRequest $args
     * @return DeregisterServiceResponse
     */
    public function deregisterService(DeregisterServiceRequest $args)
    {
        $result = parent::deregisterService($args->toArray());
        return new DeregisterServiceResponse($result->toArray());
    }
}
