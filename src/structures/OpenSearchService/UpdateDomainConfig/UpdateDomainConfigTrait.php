<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig;

trait UpdateDomainConfigTrait
{
    /**
     * @param UpdateDomainConfigRequest $args
     * @return UpdateDomainConfigResponse
     */
    public function updateDomainConfig(UpdateDomainConfigRequest $args)
    {
        $result = parent::updateDomainConfig($args->toArray());
        return new UpdateDomainConfigResponse($result->toArray());
    }
}
