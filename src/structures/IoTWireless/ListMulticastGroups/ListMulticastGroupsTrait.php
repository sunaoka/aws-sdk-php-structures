<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListMulticastGroups;

trait ListMulticastGroupsTrait
{
    /**
     * @param ListMulticastGroupsRequest $args
     * @return ListMulticastGroupsResponse
     */
    public function listMulticastGroups(ListMulticastGroupsRequest $args)
    {
        $result = parent::listMulticastGroups($args->toArray());
        return new ListMulticastGroupsResponse($result->toArray());
    }
}
