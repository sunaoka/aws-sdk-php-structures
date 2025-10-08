<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectAggregateResourceConfig;

trait SelectAggregateResourceConfigTrait
{
    /**
     * @param SelectAggregateResourceConfigRequest $args
     * @return SelectAggregateResourceConfigResponse
     */
    public function selectAggregateResourceConfig(SelectAggregateResourceConfigRequest $args)
    {
        $result = parent::selectAggregateResourceConfig($args->toArray());
        return new SelectAggregateResourceConfigResponse($result->toArray());
    }
}
