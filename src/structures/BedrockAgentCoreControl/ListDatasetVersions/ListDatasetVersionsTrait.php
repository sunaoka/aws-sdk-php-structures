<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetVersions;

trait ListDatasetVersionsTrait
{
    /**
     * @param ListDatasetVersionsRequest $args
     * @return ListDatasetVersionsResponse
     */
    public function listDatasetVersions(ListDatasetVersionsRequest $args)
    {
        $result = parent::listDatasetVersions($args->toArray());
        return new ListDatasetVersionsResponse($result->toArray());
    }
}
