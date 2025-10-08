<?php

namespace Sunaoka\Aws\Structures\drs\DeleteSourceServer;

trait DeleteSourceServerTrait
{
    /**
     * @param DeleteSourceServerRequest $args
     * @return DeleteSourceServerResponse
     */
    public function deleteSourceServer(DeleteSourceServerRequest $args)
    {
        $result = parent::deleteSourceServer($args->toArray());
        return new DeleteSourceServerResponse($result->toArray());
    }
}
