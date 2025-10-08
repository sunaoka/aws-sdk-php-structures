<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig;

trait DescribeElasticsearchDomainConfigTrait
{
    /**
     * @param DescribeElasticsearchDomainConfigRequest $args
     * @return DescribeElasticsearchDomainConfigResponse
     */
    public function describeElasticsearchDomainConfig(DescribeElasticsearchDomainConfigRequest $args)
    {
        $result = parent::describeElasticsearchDomainConfig($args->toArray());
        return new DescribeElasticsearchDomainConfigResponse($result->toArray());
    }
}
