<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListWorkgroups;

trait ListWorkgroupsTrait
{
    /**
     * @param ListWorkgroupsRequest $args
     * @return ListWorkgroupsResponse
     */
    public function listWorkgroups(ListWorkgroupsRequest $args)
    {
        $result = parent::listWorkgroups($args->toArray());
        return new ListWorkgroupsResponse($result->toArray());
    }
}
