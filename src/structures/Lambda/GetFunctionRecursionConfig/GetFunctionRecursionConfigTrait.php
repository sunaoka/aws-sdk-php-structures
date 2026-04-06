<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionRecursionConfig;

trait GetFunctionRecursionConfigTrait
{
    /**
     * @param GetFunctionRecursionConfigRequest $args
     * @return GetFunctionRecursionConfigResponse
     */
    public function getFunctionRecursionConfig(GetFunctionRecursionConfigRequest $args)
    {
        $result = parent::getFunctionRecursionConfig($args->toArray());
        return new GetFunctionRecursionConfigResponse($result->toArray());
    }
}
