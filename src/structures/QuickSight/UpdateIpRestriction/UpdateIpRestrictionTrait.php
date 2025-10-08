<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIpRestriction;

trait UpdateIpRestrictionTrait
{
    /**
     * @param UpdateIpRestrictionRequest $args
     * @return UpdateIpRestrictionResponse
     */
    public function updateIpRestriction(UpdateIpRestrictionRequest $args)
    {
        $result = parent::updateIpRestriction($args->toArray());
        return new UpdateIpRestrictionResponse($result->toArray());
    }
}
