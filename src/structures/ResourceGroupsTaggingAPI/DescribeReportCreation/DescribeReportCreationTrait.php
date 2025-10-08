<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\DescribeReportCreation;

trait DescribeReportCreationTrait
{
    /**
     * @param DescribeReportCreationRequest $args
     * @return DescribeReportCreationResponse
     */
    public function describeReportCreation(DescribeReportCreationRequest $args)
    {
        $result = parent::describeReportCreation($args->toArray());
        return new DescribeReportCreationResponse($result->toArray());
    }
}
