<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteLocation;

trait DeleteLocationTrait
{
    /**
     * @param DeleteLocationRequest $args
     * @return DeleteLocationResponse
     */
    public function deleteLocation(DeleteLocationRequest $args)
    {
        $result = parent::deleteLocation($args->toArray());
        return new DeleteLocationResponse($result->toArray());
    }
}
