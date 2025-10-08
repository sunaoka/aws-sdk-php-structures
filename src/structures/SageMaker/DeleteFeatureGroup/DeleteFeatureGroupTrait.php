<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteFeatureGroup;

trait DeleteFeatureGroupTrait
{
    /**
     * @param DeleteFeatureGroupRequest $args
     * @return void
     */
    public function deleteFeatureGroup(DeleteFeatureGroupRequest $args)
    {
        parent::deleteFeatureGroup($args->toArray());
    }
}
