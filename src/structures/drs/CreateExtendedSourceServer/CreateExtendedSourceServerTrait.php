<?php

namespace Sunaoka\Aws\Structures\drs\CreateExtendedSourceServer;

trait CreateExtendedSourceServerTrait
{
    /**
     * @param CreateExtendedSourceServerRequest $args
     * @return CreateExtendedSourceServerResponse
     */
    public function createExtendedSourceServer(CreateExtendedSourceServerRequest $args)
    {
        $result = parent::createExtendedSourceServer($args->toArray());
        return new CreateExtendedSourceServerResponse($result->toArray());
    }
}
