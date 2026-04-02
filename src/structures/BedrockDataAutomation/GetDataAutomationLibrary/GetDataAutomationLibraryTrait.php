<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibrary;

trait GetDataAutomationLibraryTrait
{
    /**
     * @param GetDataAutomationLibraryRequest $args
     * @return GetDataAutomationLibraryResponse
     */
    public function getDataAutomationLibrary(GetDataAutomationLibraryRequest $args)
    {
        $result = parent::getDataAutomationLibrary($args->toArray());
        return new GetDataAutomationLibraryResponse($result->toArray());
    }
}
