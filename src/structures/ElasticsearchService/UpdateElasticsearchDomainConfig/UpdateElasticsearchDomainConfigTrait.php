<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig;

trait UpdateElasticsearchDomainConfigTrait
{
    /**
     * @param UpdateElasticsearchDomainConfigRequest $args
     * @return UpdateElasticsearchDomainConfigResponse
     */
    public function updateElasticsearchDomainConfig(UpdateElasticsearchDomainConfigRequest $args)
    {
        $result = parent::updateElasticsearchDomainConfig($args->toArray());
        return new UpdateElasticsearchDomainConfigResponse($result->toArray());
    }
}
