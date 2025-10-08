<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCustomDBEngineVersion;

trait ModifyCustomDBEngineVersionTrait
{
    /**
     * @param ModifyCustomDBEngineVersionRequest $args
     * @return ModifyCustomDBEngineVersionResponse
     */
    public function modifyCustomDBEngineVersion(ModifyCustomDBEngineVersionRequest $args)
    {
        $result = parent::modifyCustomDBEngineVersion($args->toArray());
        return new ModifyCustomDBEngineVersionResponse($result->toArray());
    }
}
