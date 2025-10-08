<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateThreatIntelSet;

trait UpdateThreatIntelSetTrait
{
    /**
     * @param UpdateThreatIntelSetRequest $args
     * @return UpdateThreatIntelSetResponse
     */
    public function updateThreatIntelSet(UpdateThreatIntelSetRequest $args)
    {
        $result = parent::updateThreatIntelSet($args->toArray());
        return new UpdateThreatIntelSetResponse($result->toArray());
    }
}
