<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig;

trait DescribeDomainConfigTrait
{
    /**
     * @param DescribeDomainConfigRequest $args
     * @return DescribeDomainConfigResponse
     */
    public function describeDomainConfig(DescribeDomainConfigRequest $args)
    {
        $result = parent::describeDomainConfig($args->toArray());
        return new DescribeDomainConfigResponse($result->toArray());
    }
}
