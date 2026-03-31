<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateFinding;

trait UpdateFindingTrait
{
    /**
     * @param UpdateFindingRequest $args
     * @return UpdateFindingResponse
     */
    public function updateFinding(UpdateFindingRequest $args)
    {
        $result = parent::updateFinding($args->toArray());
        return new UpdateFindingResponse($result->toArray());
    }
}
