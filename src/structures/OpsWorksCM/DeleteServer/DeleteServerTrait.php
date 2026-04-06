<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DeleteServer;

trait DeleteServerTrait
{
    /**
     * @param DeleteServerRequest $args
     * @return DeleteServerResponse
     */
    public function deleteServer(DeleteServerRequest $args)
    {
        $result = parent::deleteServer($args->toArray());
        return new DeleteServerResponse($result->toArray());
    }
}
