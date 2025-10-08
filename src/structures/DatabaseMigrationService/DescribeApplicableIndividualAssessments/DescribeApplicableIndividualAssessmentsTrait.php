<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeApplicableIndividualAssessments;

trait DescribeApplicableIndividualAssessmentsTrait
{
    /**
     * @param DescribeApplicableIndividualAssessmentsRequest $args
     * @return DescribeApplicableIndividualAssessmentsResponse
     */
    public function describeApplicableIndividualAssessments(DescribeApplicableIndividualAssessmentsRequest $args)
    {
        $result = parent::describeApplicableIndividualAssessments($args->toArray());
        return new DescribeApplicableIndividualAssessmentsResponse($result->toArray());
    }
}
