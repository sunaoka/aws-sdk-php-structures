<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationLibrary;

trait UpdateDataAutomationLibraryTrait
{
    /**
     * @param UpdateDataAutomationLibraryRequest $args
     * @return UpdateDataAutomationLibraryResponse
     */
    public function updateDataAutomationLibrary(UpdateDataAutomationLibraryRequest $args)
    {
        $result = parent::updateDataAutomationLibrary($args->toArray());
        return new UpdateDataAutomationLibraryResponse($result->toArray());
    }
}
