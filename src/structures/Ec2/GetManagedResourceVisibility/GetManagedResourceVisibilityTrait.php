<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedResourceVisibility;

trait GetManagedResourceVisibilityTrait
{
    /**
     * @param GetManagedResourceVisibilityRequest $args
     * @return GetManagedResourceVisibilityResponse
     */
    public function getManagedResourceVisibility(GetManagedResourceVisibilityRequest $args)
    {
        $result = parent::getManagedResourceVisibility($args->toArray());
        return new GetManagedResourceVisibilityResponse($result->toArray());
    }
}
