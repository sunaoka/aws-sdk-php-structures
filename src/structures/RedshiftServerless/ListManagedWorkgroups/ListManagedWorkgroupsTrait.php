<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListManagedWorkgroups;

trait ListManagedWorkgroupsTrait
{
    /**
     * @param ListManagedWorkgroupsRequest $args
     * @return ListManagedWorkgroupsResponse
     */
    public function listManagedWorkgroups(ListManagedWorkgroupsRequest $args)
    {
        $result = parent::listManagedWorkgroups($args->toArray());
        return new ListManagedWorkgroupsResponse($result->toArray());
    }
}
