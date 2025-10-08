<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpgradeDomain;

trait UpgradeDomainTrait
{
    /**
     * @param UpgradeDomainRequest $args
     * @return UpgradeDomainResponse
     */
    public function upgradeDomain(UpgradeDomainRequest $args)
    {
        $result = parent::upgradeDomain($args->toArray());
        return new UpgradeDomainResponse($result->toArray());
    }
}
