<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteTrafficDistributionGroup;

trait DeleteTrafficDistributionGroupTrait
{
    /**
     * @param DeleteTrafficDistributionGroupRequest $args
     * @return DeleteTrafficDistributionGroupResponse
     */
    public function deleteTrafficDistributionGroup(DeleteTrafficDistributionGroupRequest $args)
    {
        $result = parent::deleteTrafficDistributionGroup($args->toArray());
        return new DeleteTrafficDistributionGroupResponse($result->toArray());
    }
}
