<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer;

trait UpdateServerTrait
{
    /**
     * @param UpdateServerRequest $args
     * @return UpdateServerResponse
     */
    public function updateServer(UpdateServerRequest $args)
    {
        $result = parent::updateServer($args->toArray());
        return new UpdateServerResponse($result->toArray());
    }
}
