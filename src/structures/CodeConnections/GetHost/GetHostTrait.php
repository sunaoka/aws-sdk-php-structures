<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetHost;

trait GetHostTrait
{
    /**
     * @param GetHostRequest $args
     * @return GetHostResponse
     */
    public function getHost(GetHostRequest $args)
    {
        $result = parent::getHost($args->toArray());
        return new GetHostResponse($result->toArray());
    }
}
