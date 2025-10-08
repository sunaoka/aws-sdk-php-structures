<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains;

trait DescribeElasticsearchDomainsTrait
{
    /**
     * @param DescribeElasticsearchDomainsRequest $args
     * @return DescribeElasticsearchDomainsResponse
     */
    public function describeElasticsearchDomains(DescribeElasticsearchDomainsRequest $args)
    {
        $result = parent::describeElasticsearchDomains($args->toArray());
        return new DescribeElasticsearchDomainsResponse($result->toArray());
    }
}
