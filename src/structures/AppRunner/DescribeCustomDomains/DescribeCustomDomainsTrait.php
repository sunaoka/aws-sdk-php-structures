<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeCustomDomains;

trait DescribeCustomDomainsTrait
{
    /**
     * @param DescribeCustomDomainsRequest $args
     * @return DescribeCustomDomainsResponse
     */
    public function describeCustomDomains(DescribeCustomDomainsRequest $args)
    {
        $result = parent::describeCustomDomains($args->toArray());
        return new DescribeCustomDomainsResponse($result->toArray());
    }
}
