<?php

namespace Sunaoka\Aws\Structures\ConfigService\BatchGetResourceConfig;

trait BatchGetResourceConfigTrait
{
    /**
     * @param BatchGetResourceConfigRequest $args
     * @return BatchGetResourceConfigResponse
     */
    public function batchGetResourceConfig(BatchGetResourceConfigRequest $args)
    {
        $result = parent::batchGetResourceConfig($args->toArray());
        return new BatchGetResourceConfigResponse($result->toArray());
    }
}
