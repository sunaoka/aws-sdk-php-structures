<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContactVersions;

trait ListContactVersionsTrait
{
    /**
     * @param ListContactVersionsRequest $args
     * @return ListContactVersionsResponse
     */
    public function listContactVersions(ListContactVersionsRequest $args)
    {
        $result = parent::listContactVersions($args->toArray());
        return new ListContactVersionsResponse($result->toArray());
    }
}
