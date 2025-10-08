<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEngineVersions;

trait ListEngineVersionsTrait
{
    /**
     * @param ListEngineVersionsRequest $args
     * @return ListEngineVersionsResponse
     */
    public function listEngineVersions(ListEngineVersionsRequest $args)
    {
        $result = parent::listEngineVersions($args->toArray());
        return new ListEngineVersionsResponse($result->toArray());
    }
}
