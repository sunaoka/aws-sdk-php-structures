<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath;

trait GetEffectivePermissionsForPathTrait
{
    /**
     * @param GetEffectivePermissionsForPathRequest $args
     * @return GetEffectivePermissionsForPathResponse
     */
    public function getEffectivePermissionsForPath(GetEffectivePermissionsForPathRequest $args)
    {
        $result = parent::getEffectivePermissionsForPath($args->toArray());
        return new GetEffectivePermissionsForPathResponse($result->toArray());
    }
}
