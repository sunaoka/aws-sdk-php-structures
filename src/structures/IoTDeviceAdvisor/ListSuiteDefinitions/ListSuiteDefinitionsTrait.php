<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteDefinitions;

trait ListSuiteDefinitionsTrait
{
    /**
     * @param ListSuiteDefinitionsRequest $args
     * @return ListSuiteDefinitionsResponse
     */
    public function listSuiteDefinitions(ListSuiteDefinitionsRequest $args)
    {
        $result = parent::listSuiteDefinitions($args->toArray());
        return new ListSuiteDefinitionsResponse($result->toArray());
    }
}
