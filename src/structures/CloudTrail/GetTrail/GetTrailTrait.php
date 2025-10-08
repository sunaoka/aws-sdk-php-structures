<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrail;

trait GetTrailTrait
{
    /**
     * @param GetTrailRequest $args
     * @return GetTrailResponse
     */
    public function getTrail(GetTrailRequest $args)
    {
        $result = parent::getTrail($args->toArray());
        return new GetTrailResponse($result->toArray());
    }
}
