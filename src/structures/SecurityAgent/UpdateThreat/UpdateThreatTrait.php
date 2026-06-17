<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreat;

trait UpdateThreatTrait
{
    /**
     * @param UpdateThreatRequest $args
     * @return UpdateThreatResponse
     */
    public function updateThreat(UpdateThreatRequest $args)
    {
        $result = parent::updateThreat($args->toArray());
        return new UpdateThreatResponse($result->toArray());
    }
}
