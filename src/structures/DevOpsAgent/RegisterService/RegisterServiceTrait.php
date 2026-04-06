<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService;

trait RegisterServiceTrait
{
    /**
     * @param RegisterServiceRequest $args
     * @return RegisterServiceResponse
     */
    public function registerService(RegisterServiceRequest $args)
    {
        $result = parent::registerService($args->toArray());
        return new RegisterServiceResponse($result->toArray());
    }
}
