<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCloudFormationStack;

trait CreateCloudFormationStackTrait
{
    /**
     * @param CreateCloudFormationStackRequest $args
     * @return CreateCloudFormationStackResponse
     */
    public function createCloudFormationStack(CreateCloudFormationStackRequest $args)
    {
        $result = parent::createCloudFormationStack($args->toArray());
        return new CreateCloudFormationStackResponse($result->toArray());
    }
}
