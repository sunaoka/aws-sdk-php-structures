<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup;

trait UpdateFeatureGroupTrait
{
    /**
     * @param UpdateFeatureGroupRequest $args
     * @return UpdateFeatureGroupResponse
     */
    public function updateFeatureGroup(UpdateFeatureGroupRequest $args)
    {
        $result = parent::updateFeatureGroup($args->toArray());
        return new UpdateFeatureGroupResponse($result->toArray());
    }
}
