<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionRecursionConfig;

trait PutFunctionRecursionConfigTrait
{
    /**
     * @param PutFunctionRecursionConfigRequest $args
     * @return PutFunctionRecursionConfigResponse
     */
    public function putFunctionRecursionConfig(PutFunctionRecursionConfigRequest $args)
    {
        $result = parent::putFunctionRecursionConfig($args->toArray());
        return new PutFunctionRecursionConfigResponse($result->toArray());
    }
}
