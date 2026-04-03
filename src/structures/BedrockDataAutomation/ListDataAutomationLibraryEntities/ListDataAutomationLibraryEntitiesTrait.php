<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraryEntities;

trait ListDataAutomationLibraryEntitiesTrait
{
    /**
     * @param ListDataAutomationLibraryEntitiesRequest $args
     * @return ListDataAutomationLibraryEntitiesResponse
     */
    public function listDataAutomationLibraryEntities(ListDataAutomationLibraryEntitiesRequest $args)
    {
        $result = parent::listDataAutomationLibraryEntities($args->toArray());
        return new ListDataAutomationLibraryEntitiesResponse($result->toArray());
    }
}
