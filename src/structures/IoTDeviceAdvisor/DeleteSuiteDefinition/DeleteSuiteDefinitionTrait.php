<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\DeleteSuiteDefinition;

trait DeleteSuiteDefinitionTrait
{
    /**
     * @param DeleteSuiteDefinitionRequest $args
     * @return DeleteSuiteDefinitionResponse
     */
    public function deleteSuiteDefinition(DeleteSuiteDefinitionRequest $args)
    {
        $result = parent::deleteSuiteDefinition($args->toArray());
        return new DeleteSuiteDefinitionResponse($result->toArray());
    }
}
