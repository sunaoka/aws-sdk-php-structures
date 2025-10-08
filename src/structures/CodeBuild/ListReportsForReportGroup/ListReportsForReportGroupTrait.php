<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReportsForReportGroup;

trait ListReportsForReportGroupTrait
{
    /**
     * @param ListReportsForReportGroupRequest $args
     * @return ListReportsForReportGroupResponse
     */
    public function listReportsForReportGroup(ListReportsForReportGroupRequest $args)
    {
        $result = parent::listReportsForReportGroup($args->toArray());
        return new ListReportsForReportGroupResponse($result->toArray());
    }
}
