<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService;

trait GetProviderServiceTrait
{
    /**
     * @param GetProviderServiceRequest $args
     * @return GetProviderServiceResponse
     */
    public function getProviderService(GetProviderServiceRequest $args)
    {
        $result = parent::getProviderService($args->toArray());
        return new GetProviderServiceResponse($result->toArray());
    }
}
