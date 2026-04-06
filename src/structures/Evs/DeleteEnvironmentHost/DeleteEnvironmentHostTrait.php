<?php

namespace Sunaoka\Aws\Structures\Evs\DeleteEnvironmentHost;

trait DeleteEnvironmentHostTrait
{
    /**
     * @param DeleteEnvironmentHostRequest $args
     * @return DeleteEnvironmentHostResponse
     */
    public function deleteEnvironmentHost(DeleteEnvironmentHostRequest $args)
    {
        $result = parent::deleteEnvironmentHost($args->toArray());
        return new DeleteEnvironmentHostResponse($result->toArray());
    }
}
