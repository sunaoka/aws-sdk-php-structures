<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyManagedResourceVisibility;

trait ModifyManagedResourceVisibilityTrait
{
    /**
     * @param ModifyManagedResourceVisibilityRequest $args
     * @return ModifyManagedResourceVisibilityResponse
     */
    public function modifyManagedResourceVisibility(ModifyManagedResourceVisibilityRequest $args)
    {
        $result = parent::modifyManagedResourceVisibility($args->toArray());
        return new ModifyManagedResourceVisibilityResponse($result->toArray());
    }
}
