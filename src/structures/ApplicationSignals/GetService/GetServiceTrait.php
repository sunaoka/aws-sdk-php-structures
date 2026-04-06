<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetService;

trait GetServiceTrait
{
    /**
     * @param GetServiceRequest $args
     * @return GetServiceResponse
     */
    public function getService(GetServiceRequest $args)
    {
        $result = parent::getService($args->toArray());
        return new GetServiceResponse($result->toArray());
    }
}
