<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateServer;

trait CreateServerTrait
{
    /**
     * @param CreateServerRequest $args
     * @return CreateServerResponse
     */
    public function createServer(CreateServerRequest $args)
    {
        $result = parent::createServer($args->toArray());
        return new CreateServerResponse($result->toArray());
    }
}
