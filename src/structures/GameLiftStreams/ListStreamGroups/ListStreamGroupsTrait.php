<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamGroups;

trait ListStreamGroupsTrait
{
    /**
     * @param ListStreamGroupsRequest $args
     * @return ListStreamGroupsResponse
     */
    public function listStreamGroups(ListStreamGroupsRequest $args)
    {
        $result = parent::listStreamGroups($args->toArray());
        return new ListStreamGroupsResponse($result->toArray());
    }
}
