<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteDefinition;

trait GetSuiteDefinitionTrait
{
    /**
     * @param GetSuiteDefinitionRequest $args
     * @return GetSuiteDefinitionResponse
     */
    public function getSuiteDefinition(GetSuiteDefinitionRequest $args)
    {
        $result = parent::getSuiteDefinition($args->toArray());
        return new GetSuiteDefinitionResponse($result->toArray());
    }
}
