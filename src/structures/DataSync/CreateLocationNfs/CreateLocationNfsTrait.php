<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationNfs;

trait CreateLocationNfsTrait
{
    /**
     * @param CreateLocationNfsRequest $args
     * @return CreateLocationNfsResponse
     */
    public function createLocationNfs(CreateLocationNfsRequest $args)
    {
        $result = parent::createLocationNfs($args->toArray());
        return new CreateLocationNfsResponse($result->toArray());
    }
}
