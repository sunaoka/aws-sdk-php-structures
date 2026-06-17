<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListHarnessVersions;

trait ListHarnessVersionsTrait
{
    /**
     * @param ListHarnessVersionsRequest $args
     * @return ListHarnessVersionsResponse
     */
    public function listHarnessVersions(ListHarnessVersionsRequest $args)
    {
        $result = parent::listHarnessVersions($args->toArray());
        return new ListHarnessVersionsResponse($result->toArray());
    }
}
