<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntimeVersion;

trait GetRuntimeVersionTrait
{
    /**
     * @param GetRuntimeVersionRequest $args
     * @return GetRuntimeVersionResponse
     */
    public function getRuntimeVersion(GetRuntimeVersionRequest $args)
    {
        $result = parent::getRuntimeVersion($args->toArray());
        return new GetRuntimeVersionResponse($result->toArray());
    }
}
