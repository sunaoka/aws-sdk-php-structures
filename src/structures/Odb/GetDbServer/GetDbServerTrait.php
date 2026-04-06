<?php

namespace Sunaoka\Aws\Structures\Odb\GetDbServer;

trait GetDbServerTrait
{
    /**
     * @param GetDbServerRequest $args
     * @return GetDbServerResponse
     */
    public function getDbServer(GetDbServerRequest $args)
    {
        $result = parent::getDbServer($args->toArray());
        return new GetDbServerResponse($result->toArray());
    }
}
