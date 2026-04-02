<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\DeleteDataAutomationLibrary;

trait DeleteDataAutomationLibraryTrait
{
    /**
     * @param DeleteDataAutomationLibraryRequest $args
     * @return DeleteDataAutomationLibraryResponse
     */
    public function deleteDataAutomationLibrary(DeleteDataAutomationLibraryRequest $args)
    {
        $result = parent::deleteDataAutomationLibrary($args->toArray());
        return new DeleteDataAutomationLibraryResponse($result->toArray());
    }
}
