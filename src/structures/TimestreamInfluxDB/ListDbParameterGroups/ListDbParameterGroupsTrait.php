<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbParameterGroups;

trait ListDbParameterGroupsTrait
{
    /**
     * @param ListDbParameterGroupsRequest $args
     * @return ListDbParameterGroupsResponse
     */
    public function listDbParameterGroups(ListDbParameterGroupsRequest $args)
    {
        $result = parent::listDbParameterGroups($args->toArray());
        return new ListDbParameterGroupsResponse($result->toArray());
    }
}
