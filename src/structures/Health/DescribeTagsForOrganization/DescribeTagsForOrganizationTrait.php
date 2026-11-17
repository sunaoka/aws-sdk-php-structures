<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagsForOrganization;

trait DescribeTagsForOrganizationTrait
{
    /**
     * @param DescribeTagsForOrganizationRequest $args
     * @return DescribeTagsForOrganizationResponse
     */
    public function describeTagsForOrganization(DescribeTagsForOrganizationRequest $args)
    {
        $result = parent::describeTagsForOrganization($args->toArray());
        return new DescribeTagsForOrganizationResponse($result->toArray());
    }
}
