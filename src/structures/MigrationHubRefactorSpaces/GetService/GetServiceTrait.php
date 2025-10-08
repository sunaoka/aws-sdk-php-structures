<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetService;

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
