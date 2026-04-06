<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\ListSoftwareSets;

trait ListSoftwareSetsTrait
{
    /**
     * @param ListSoftwareSetsRequest $args
     * @return ListSoftwareSetsResponse
     */
    public function listSoftwareSets(ListSoftwareSetsRequest $args)
    {
        $result = parent::listSoftwareSets($args->toArray());
        return new ListSoftwareSetsResponse($result->toArray());
    }
}
