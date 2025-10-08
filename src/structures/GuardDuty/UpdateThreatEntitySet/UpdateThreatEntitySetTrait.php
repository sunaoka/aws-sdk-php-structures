<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateThreatEntitySet;

trait UpdateThreatEntitySetTrait
{
    /**
     * @param UpdateThreatEntitySetRequest $args
     * @return UpdateThreatEntitySetResponse
     */
    public function updateThreatEntitySet(UpdateThreatEntitySetRequest $args)
    {
        $result = parent::updateThreatEntitySet($args->toArray());
        return new UpdateThreatEntitySetResponse($result->toArray());
    }
}
