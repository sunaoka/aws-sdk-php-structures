<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentHost;

trait CreateEnvironmentHostTrait
{
    /**
     * @param CreateEnvironmentHostRequest $args
     * @return CreateEnvironmentHostResponse
     */
    public function createEnvironmentHost(CreateEnvironmentHostRequest $args)
    {
        $result = parent::createEnvironmentHost($args->toArray());
        return new CreateEnvironmentHostResponse($result->toArray());
    }
}
