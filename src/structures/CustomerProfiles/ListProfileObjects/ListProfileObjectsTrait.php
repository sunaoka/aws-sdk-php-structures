<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjects;

trait ListProfileObjectsTrait
{
    /**
     * @param ListProfileObjectsRequest $args
     * @return ListProfileObjectsResponse
     */
    public function listProfileObjects(ListProfileObjectsRequest $args)
    {
        $result = parent::listProfileObjects($args->toArray());
        return new ListProfileObjectsResponse($result->toArray());
    }
}
