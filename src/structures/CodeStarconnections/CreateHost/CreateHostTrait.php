<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\CreateHost;

trait CreateHostTrait
{
    /**
     * @param CreateHostRequest $args
     * @return CreateHostResponse
     */
    public function createHost(CreateHostRequest $args)
    {
        $result = parent::createHost($args->toArray());
        return new CreateHostResponse($result->toArray());
    }
}
