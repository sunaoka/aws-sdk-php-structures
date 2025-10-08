<?php

namespace Sunaoka\Aws\Structures\ConfigService\BatchGetAggregateResourceConfig;

trait BatchGetAggregateResourceConfigTrait
{
    /**
     * @param BatchGetAggregateResourceConfigRequest $args
     * @return BatchGetAggregateResourceConfigResponse
     */
    public function batchGetAggregateResourceConfig(BatchGetAggregateResourceConfigRequest $args)
    {
        $result = parent::batchGetAggregateResourceConfig($args->toArray());
        return new BatchGetAggregateResourceConfigResponse($result->toArray());
    }
}
