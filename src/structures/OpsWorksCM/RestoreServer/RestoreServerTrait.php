<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\RestoreServer;

trait RestoreServerTrait
{
    /**
     * @param RestoreServerRequest $args
     * @return RestoreServerResponse
     */
    public function restoreServer(RestoreServerRequest $args)
    {
        $result = parent::restoreServer($args->toArray());
        return new RestoreServerResponse($result->toArray());
    }
}
