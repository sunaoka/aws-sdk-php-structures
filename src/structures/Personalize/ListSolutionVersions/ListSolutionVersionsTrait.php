<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSolutionVersions;

trait ListSolutionVersionsTrait
{
    /**
     * @param ListSolutionVersionsRequest $args
     * @return ListSolutionVersionsResponse
     */
    public function listSolutionVersions(ListSolutionVersionsRequest $args)
    {
        $result = parent::listSolutionVersions($args->toArray());
        return new ListSolutionVersionsResponse($result->toArray());
    }
}
