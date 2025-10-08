<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer;

trait UpdateSourceServerTrait
{
    /**
     * @param UpdateSourceServerRequest $args
     * @return UpdateSourceServerResponse
     */
    public function updateSourceServer(UpdateSourceServerRequest $args)
    {
        $result = parent::updateSourceServer($args->toArray());
        return new UpdateSourceServerResponse($result->toArray());
    }
}
