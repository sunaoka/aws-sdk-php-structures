<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ListAvailableManagementCidrRanges;

trait ListAvailableManagementCidrRangesTrait
{
    /**
     * @param ListAvailableManagementCidrRangesRequest $args
     * @return ListAvailableManagementCidrRangesResponse
     */
    public function listAvailableManagementCidrRanges(ListAvailableManagementCidrRangesRequest $args)
    {
        $result = parent::listAvailableManagementCidrRanges($args->toArray());
        return new ListAvailableManagementCidrRangesResponse($result->toArray());
    }
}
