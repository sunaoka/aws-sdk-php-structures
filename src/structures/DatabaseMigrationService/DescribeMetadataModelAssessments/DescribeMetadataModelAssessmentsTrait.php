<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelAssessments;

trait DescribeMetadataModelAssessmentsTrait
{
    /**
     * @param DescribeMetadataModelAssessmentsRequest $args
     * @return DescribeMetadataModelAssessmentsResponse
     */
    public function describeMetadataModelAssessments(DescribeMetadataModelAssessmentsRequest $args)
    {
        $result = parent::describeMetadataModelAssessments($args->toArray());
        return new DescribeMetadataModelAssessmentsResponse($result->toArray());
    }
}
