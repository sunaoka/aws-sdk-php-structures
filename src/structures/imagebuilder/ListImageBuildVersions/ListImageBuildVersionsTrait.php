<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions;

trait ListImageBuildVersionsTrait
{
    /**
     * @param ListImageBuildVersionsRequest $args
     * @return ListImageBuildVersionsResponse
     */
    public function listImageBuildVersions(ListImageBuildVersionsRequest $args)
    {
        $result = parent::listImageBuildVersions($args->toArray());
        return new ListImageBuildVersionsResponse($result->toArray());
    }
}
