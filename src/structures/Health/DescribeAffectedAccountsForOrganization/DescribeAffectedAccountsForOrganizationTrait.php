<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization;

trait DescribeAffectedAccountsForOrganizationTrait
{
    /**
     * @param DescribeAffectedAccountsForOrganizationRequest $args
     * @return DescribeAffectedAccountsForOrganizationResponse
     */
    public function describeAffectedAccountsForOrganization(DescribeAffectedAccountsForOrganizationRequest $args)
    {
        $result = parent::describeAffectedAccountsForOrganization($args->toArray());
        return new DescribeAffectedAccountsForOrganizationResponse($result->toArray());
    }
}
