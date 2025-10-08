<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\CreateSuiteDefinition;

trait CreateSuiteDefinitionTrait
{
    /**
     * @param CreateSuiteDefinitionRequest $args
     * @return CreateSuiteDefinitionResponse
     */
    public function createSuiteDefinition(CreateSuiteDefinitionRequest $args)
    {
        $result = parent::createSuiteDefinition($args->toArray());
        return new CreateSuiteDefinitionResponse($result->toArray());
    }
}
