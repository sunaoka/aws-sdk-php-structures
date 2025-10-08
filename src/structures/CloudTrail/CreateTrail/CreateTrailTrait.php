<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateTrail;

trait CreateTrailTrait
{
    /**
     * @param CreateTrailRequest $args
     * @return CreateTrailResponse
     */
    public function createTrail(CreateTrailRequest $args)
    {
        $result = parent::createTrail($args->toArray());
        return new CreateTrailResponse($result->toArray());
    }
}
