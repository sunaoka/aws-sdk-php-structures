<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentRuns;

trait DescribeReplicationTaskAssessmentRunsTrait
{
    /**
     * @param DescribeReplicationTaskAssessmentRunsRequest $args
     * @return DescribeReplicationTaskAssessmentRunsResponse
     */
    public function describeReplicationTaskAssessmentRuns(DescribeReplicationTaskAssessmentRunsRequest $args)
    {
        $result = parent::describeReplicationTaskAssessmentRuns($args->toArray());
        return new DescribeReplicationTaskAssessmentRunsResponse($result->toArray());
    }
}
