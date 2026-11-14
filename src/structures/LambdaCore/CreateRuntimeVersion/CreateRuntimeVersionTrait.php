<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateRuntimeVersion;

trait CreateRuntimeVersionTrait
{
    /**
     * @param CreateRuntimeVersionRequest $args
     * @return CreateRuntimeVersionResponse
     */
    public function createRuntimeVersion(CreateRuntimeVersionRequest $args)
    {
        $result = parent::createRuntimeVersion($args->toArray());
        return new CreateRuntimeVersionResponse($result->toArray());
    }
}
