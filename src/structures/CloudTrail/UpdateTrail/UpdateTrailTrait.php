<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateTrail;

trait UpdateTrailTrait
{
    /**
     * @param UpdateTrailRequest $args
     * @return UpdateTrailResponse
     */
    public function updateTrail(UpdateTrailRequest $args)
    {
        $result = parent::updateTrail($args->toArray());
        return new UpdateTrailResponse($result->toArray());
    }
}
