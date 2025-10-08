<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization;

trait DescribeEventsForOrganizationTrait
{
    /**
     * @param DescribeEventsForOrganizationRequest $args
     * @return DescribeEventsForOrganizationResponse
     */
    public function describeEventsForOrganization(DescribeEventsForOrganizationRequest $args)
    {
        $result = parent::describeEventsForOrganization($args->toArray());
        return new DescribeEventsForOrganizationResponse($result->toArray());
    }
}
