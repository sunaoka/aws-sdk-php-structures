<?php

namespace Sunaoka\Aws\Structures\LambdaCore\DeleteRuntimeVersion;

trait DeleteRuntimeVersionTrait
{
    /**
     * @param DeleteRuntimeVersionRequest $args
     * @return DeleteRuntimeVersionResponse
     */
    public function deleteRuntimeVersion(DeleteRuntimeVersionRequest $args)
    {
        $result = parent::deleteRuntimeVersion($args->toArray());
        return new DeleteRuntimeVersionResponse($result->toArray());
    }
}
