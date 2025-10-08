<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuilds;

trait ListBuildsTrait
{
    /**
     * @param ListBuildsRequest $args
     * @return ListBuildsResponse
     */
    public function listBuilds(ListBuildsRequest $args)
    {
        $result = parent::listBuilds($args->toArray());
        return new ListBuildsResponse($result->toArray());
    }
}
