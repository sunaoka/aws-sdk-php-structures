<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReportGroups;

trait ListReportGroupsTrait
{
    /**
     * @param ListReportGroupsRequest $args
     * @return ListReportGroupsResponse
     */
    public function listReportGroups(ListReportGroupsRequest $args)
    {
        $result = parent::listReportGroups($args->toArray());
        return new ListReportGroupsResponse($result->toArray());
    }
}
