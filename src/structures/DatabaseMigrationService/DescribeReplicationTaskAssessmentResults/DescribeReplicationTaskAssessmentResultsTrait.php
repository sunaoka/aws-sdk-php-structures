<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentResults;

trait DescribeReplicationTaskAssessmentResultsTrait
{
    /**
     * @param DescribeReplicationTaskAssessmentResultsRequest $args
     * @return DescribeReplicationTaskAssessmentResultsResponse
     */
    public function describeReplicationTaskAssessmentResults(DescribeReplicationTaskAssessmentResultsRequest $args)
    {
        $result = parent::describeReplicationTaskAssessmentResults($args->toArray());
        return new DescribeReplicationTaskAssessmentResultsResponse($result->toArray());
    }
}
