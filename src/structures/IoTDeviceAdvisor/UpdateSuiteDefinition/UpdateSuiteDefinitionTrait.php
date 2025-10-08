<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\UpdateSuiteDefinition;

trait UpdateSuiteDefinitionTrait
{
    /**
     * @param UpdateSuiteDefinitionRequest $args
     * @return UpdateSuiteDefinitionResponse
     */
    public function updateSuiteDefinition(UpdateSuiteDefinitionRequest $args)
    {
        $result = parent::updateSuiteDefinition($args->toArray());
        return new UpdateSuiteDefinitionResponse($result->toArray());
    }
}
