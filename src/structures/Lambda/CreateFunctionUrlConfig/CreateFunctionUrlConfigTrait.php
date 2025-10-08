<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunctionUrlConfig;

trait CreateFunctionUrlConfigTrait
{
    /**
     * @param CreateFunctionUrlConfigRequest $args
     * @return CreateFunctionUrlConfigResponse
     */
    public function createFunctionUrlConfig(CreateFunctionUrlConfigRequest $args)
    {
        $result = parent::createFunctionUrlConfig($args->toArray());
        return new CreateFunctionUrlConfigResponse($result->toArray());
    }
}
