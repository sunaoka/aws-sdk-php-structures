<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponentBuildVersions;

trait ListComponentBuildVersionsTrait
{
    /**
     * @param ListComponentBuildVersionsRequest $args
     * @return ListComponentBuildVersionsResponse
     */
    public function listComponentBuildVersions(ListComponentBuildVersionsRequest $args)
    {
        $result = parent::listComponentBuildVersions($args->toArray());
        return new ListComponentBuildVersionsResponse($result->toArray());
    }
}
