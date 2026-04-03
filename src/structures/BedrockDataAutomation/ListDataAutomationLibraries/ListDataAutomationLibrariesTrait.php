<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraries;

trait ListDataAutomationLibrariesTrait
{
    /**
     * @param ListDataAutomationLibrariesRequest $args
     * @return ListDataAutomationLibrariesResponse
     */
    public function listDataAutomationLibraries(ListDataAutomationLibrariesRequest $args)
    {
        $result = parent::listDataAutomationLibraries($args->toArray());
        return new ListDataAutomationLibrariesResponse($result->toArray());
    }
}
