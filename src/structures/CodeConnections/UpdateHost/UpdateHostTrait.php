<?php

namespace Sunaoka\Aws\Structures\CodeConnections\UpdateHost;

trait UpdateHostTrait
{
    /**
     * @param UpdateHostRequest $args
     * @return UpdateHostResponse
     */
    public function updateHost(UpdateHostRequest $args)
    {
        $result = parent::updateHost($args->toArray());
        return new UpdateHostResponse($result->toArray());
    }
}
