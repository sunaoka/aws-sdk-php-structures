<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibraryEntity;

trait GetDataAutomationLibraryEntityTrait
{
    /**
     * @param GetDataAutomationLibraryEntityRequest $args
     * @return GetDataAutomationLibraryEntityResponse
     */
    public function getDataAutomationLibraryEntity(GetDataAutomationLibraryEntityRequest $args)
    {
        $result = parent::getDataAutomationLibraryEntity($args->toArray());
        return new GetDataAutomationLibraryEntityResponse($result->toArray());
    }
}
