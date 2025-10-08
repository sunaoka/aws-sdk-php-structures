<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomains;

trait DescribeDomainsTrait
{
    /**
     * @param DescribeDomainsRequest $args
     * @return DescribeDomainsResponse
     */
    public function describeDomains(DescribeDomainsRequest $args)
    {
        $result = parent::describeDomains($args->toArray());
        return new DescribeDomainsResponse($result->toArray());
    }
}
