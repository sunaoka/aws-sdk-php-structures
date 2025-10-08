<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpgradeElasticsearchDomain;

trait UpgradeElasticsearchDomainTrait
{
    /**
     * @param UpgradeElasticsearchDomainRequest $args
     * @return UpgradeElasticsearchDomainResponse
     */
    public function upgradeElasticsearchDomain(UpgradeElasticsearchDomainRequest $args)
    {
        $result = parent::upgradeElasticsearchDomain($args->toArray());
        return new UpgradeElasticsearchDomainResponse($result->toArray());
    }
}
