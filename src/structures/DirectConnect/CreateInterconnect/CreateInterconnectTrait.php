<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateInterconnect;

trait CreateInterconnectTrait
{
    /**
     * @param CreateInterconnectRequest $args
     * @return CreateInterconnectResponse
     */
    public function createInterconnect(CreateInterconnectRequest $args)
    {
        $result = parent::createInterconnect($args->toArray());
        return new CreateInterconnectResponse($result->toArray());
    }
}
