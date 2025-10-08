<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup;

trait CreateFeatureGroupTrait
{
    /**
     * @param CreateFeatureGroupRequest $args
     * @return CreateFeatureGroupResponse
     */
    public function createFeatureGroup(CreateFeatureGroupRequest $args)
    {
        $result = parent::createFeatureGroup($args->toArray());
        return new CreateFeatureGroupResponse($result->toArray());
    }
}
