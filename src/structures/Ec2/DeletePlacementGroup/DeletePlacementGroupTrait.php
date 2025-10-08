<?php

namespace Sunaoka\Aws\Structures\Ec2\DeletePlacementGroup;

trait DeletePlacementGroupTrait
{
    /**
     * @param DeletePlacementGroupRequest $args
     * @return void
     */
    public function deletePlacementGroup(DeletePlacementGroupRequest $args)
    {
        parent::deletePlacementGroup($args->toArray());
    }
}
