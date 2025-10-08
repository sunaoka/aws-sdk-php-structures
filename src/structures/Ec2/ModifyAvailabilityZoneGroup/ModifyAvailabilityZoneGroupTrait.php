<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAvailabilityZoneGroup;

trait ModifyAvailabilityZoneGroupTrait
{
    /**
     * @param ModifyAvailabilityZoneGroupRequest $args
     * @return ModifyAvailabilityZoneGroupResponse
     */
    public function modifyAvailabilityZoneGroup(ModifyAvailabilityZoneGroupRequest $args)
    {
        $result = parent::modifyAvailabilityZoneGroup($args->toArray());
        return new ModifyAvailabilityZoneGroupResponse($result->toArray());
    }
}
