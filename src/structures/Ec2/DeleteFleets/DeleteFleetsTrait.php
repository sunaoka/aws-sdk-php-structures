<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets;

trait DeleteFleetsTrait
{
    /**
     * @param DeleteFleetsRequest $args
     * @return DeleteFleetsResponse
     */
    public function deleteFleets(DeleteFleetsRequest $args)
    {
        $result = parent::deleteFleets($args->toArray());
        return new DeleteFleetsResponse($result->toArray());
    }
}
