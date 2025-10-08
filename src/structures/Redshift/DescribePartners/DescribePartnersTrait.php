<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribePartners;

trait DescribePartnersTrait
{
    /**
     * @param DescribePartnersRequest $args
     * @return DescribePartnersResponse
     */
    public function describePartners(DescribePartnersRequest $args)
    {
        $result = parent::describePartners($args->toArray());
        return new DescribePartnersResponse($result->toArray());
    }
}
