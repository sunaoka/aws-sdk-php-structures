<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReportGroups;

trait BatchGetReportGroupsTrait
{
    /**
     * @param BatchGetReportGroupsRequest $args
     * @return BatchGetReportGroupsResponse
     */
    public function batchGetReportGroups(BatchGetReportGroupsRequest $args)
    {
        $result = parent::batchGetReportGroups($args->toArray());
        return new BatchGetReportGroupsResponse($result->toArray());
    }
}
