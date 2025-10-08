<?php

namespace Sunaoka\Aws\Structures\Rds\CreateCustomDBEngineVersion;

trait CreateCustomDBEngineVersionTrait
{
    /**
     * @param CreateCustomDBEngineVersionRequest $args
     * @return CreateCustomDBEngineVersionResponse
     */
    public function createCustomDBEngineVersion(CreateCustomDBEngineVersionRequest $args)
    {
        $result = parent::createCustomDBEngineVersion($args->toArray());
        return new CreateCustomDBEngineVersionResponse($result->toArray());
    }
}
