<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBaseRefreshSchedule;

trait DescribeKnowledgeBaseRefreshScheduleTrait
{
    /**
     * @param DescribeKnowledgeBaseRefreshScheduleRequest $args
     * @return DescribeKnowledgeBaseRefreshScheduleResponse
     */
    public function describeKnowledgeBaseRefreshSchedule(DescribeKnowledgeBaseRefreshScheduleRequest $args)
    {
        $result = parent::describeKnowledgeBaseRefreshSchedule($args->toArray());
        return new DescribeKnowledgeBaseRefreshScheduleResponse($result->toArray());
    }
}
