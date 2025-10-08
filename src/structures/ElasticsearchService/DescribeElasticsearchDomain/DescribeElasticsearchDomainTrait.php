<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomain;

trait DescribeElasticsearchDomainTrait
{
    /**
     * @param DescribeElasticsearchDomainRequest $args
     * @return DescribeElasticsearchDomainResponse
     */
    public function describeElasticsearchDomain(DescribeElasticsearchDomainRequest $args)
    {
        $result = parent::describeElasticsearchDomain($args->toArray());
        return new DescribeElasticsearchDomainResponse($result->toArray());
    }
}
