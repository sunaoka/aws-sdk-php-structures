<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationEfs;

trait CreateLocationEfsTrait
{
    /**
     * @param CreateLocationEfsRequest $args
     * @return CreateLocationEfsResponse
     */
    public function createLocationEfs(CreateLocationEfsRequest $args)
    {
        $result = parent::createLocationEfs($args->toArray());
        return new CreateLocationEfsResponse($result->toArray());
    }
}
