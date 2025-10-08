<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeCustomDomainAssociations;

trait DescribeCustomDomainAssociationsTrait
{
    /**
     * @param DescribeCustomDomainAssociationsRequest $args
     * @return DescribeCustomDomainAssociationsResponse
     */
    public function describeCustomDomainAssociations(DescribeCustomDomainAssociationsRequest $args)
    {
        $result = parent::describeCustomDomainAssociations($args->toArray());
        return new DescribeCustomDomainAssociationsResponse($result->toArray());
    }
}
