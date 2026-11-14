<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeVersion;

trait UpdateRuntimeVersionTrait
{
    /**
     * @param UpdateRuntimeVersionRequest $args
     * @return UpdateRuntimeVersionResponse
     */
    public function updateRuntimeVersion(UpdateRuntimeVersionRequest $args)
    {
        $result = parent::updateRuntimeVersion($args->toArray());
        return new UpdateRuntimeVersionResponse($result->toArray());
    }
}
