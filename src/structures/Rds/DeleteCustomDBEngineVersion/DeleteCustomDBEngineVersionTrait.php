<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteCustomDBEngineVersion;

trait DeleteCustomDBEngineVersionTrait
{
    /**
     * @param DeleteCustomDBEngineVersionRequest $args
     * @return DeleteCustomDBEngineVersionResponse
     */
    public function deleteCustomDBEngineVersion(DeleteCustomDBEngineVersionRequest $args)
    {
        $result = parent::deleteCustomDBEngineVersion($args->toArray());
        return new DeleteCustomDBEngineVersionResponse($result->toArray());
    }
}
