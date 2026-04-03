<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationLibrary;

trait CreateDataAutomationLibraryTrait
{
    /**
     * @param CreateDataAutomationLibraryRequest $args
     * @return CreateDataAutomationLibraryResponse
     */
    public function createDataAutomationLibrary(CreateDataAutomationLibraryRequest $args)
    {
        $result = parent::createDataAutomationLibrary($args->toArray());
        return new CreateDataAutomationLibraryResponse($result->toArray());
    }
}
