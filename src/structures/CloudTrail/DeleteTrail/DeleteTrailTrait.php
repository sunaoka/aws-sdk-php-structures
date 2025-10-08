<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeleteTrail;

trait DeleteTrailTrait
{
    /**
     * @param DeleteTrailRequest $args
     * @return DeleteTrailResponse
     */
    public function deleteTrail(DeleteTrailRequest $args)
    {
        $result = parent::deleteTrail($args->toArray());
        return new DeleteTrailResponse($result->toArray());
    }
}
