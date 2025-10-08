<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateResourceConfig;

trait GetAggregateResourceConfigTrait
{
    /**
     * @param GetAggregateResourceConfigRequest $args
     * @return GetAggregateResourceConfigResponse
     */
    public function getAggregateResourceConfig(GetAggregateResourceConfigRequest $args)
    {
        $result = parent::getAggregateResourceConfig($args->toArray());
        return new GetAggregateResourceConfigResponse($result->toArray());
    }
}
