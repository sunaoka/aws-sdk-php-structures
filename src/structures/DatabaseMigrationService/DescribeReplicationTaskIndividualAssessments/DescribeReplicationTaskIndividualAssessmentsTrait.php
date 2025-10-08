<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskIndividualAssessments;

trait DescribeReplicationTaskIndividualAssessmentsTrait
{
    /**
     * @param DescribeReplicationTaskIndividualAssessmentsRequest $args
     * @return DescribeReplicationTaskIndividualAssessmentsResponse
     */
    public function describeReplicationTaskIndividualAssessments(DescribeReplicationTaskIndividualAssessmentsRequest $args)
    {
        $result = parent::describeReplicationTaskIndividualAssessments($args->toArray());
        return new DescribeReplicationTaskIndividualAssessmentsResponse($result->toArray());
    }
}
