<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSharedReportGroups;

trait ListSharedReportGroupsTrait
{
    /**
     * @param ListSharedReportGroupsRequest $args
     * @return ListSharedReportGroupsResponse
     */
    public function listSharedReportGroups(ListSharedReportGroupsRequest $args)
    {
        $result = parent::listSharedReportGroups($args->toArray());
        return new ListSharedReportGroupsResponse($result->toArray());
    }
}
