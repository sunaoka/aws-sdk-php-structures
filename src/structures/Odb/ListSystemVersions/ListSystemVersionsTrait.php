<?php

namespace Sunaoka\Aws\Structures\Odb\ListSystemVersions;

trait ListSystemVersionsTrait
{
    /**
     * @param ListSystemVersionsRequest $args
     * @return ListSystemVersionsResponse
     */
    public function listSystemVersions(ListSystemVersionsRequest $args)
    {
        $result = parent::listSystemVersions($args->toArray());
        return new ListSystemVersionsResponse($result->toArray());
    }
}
