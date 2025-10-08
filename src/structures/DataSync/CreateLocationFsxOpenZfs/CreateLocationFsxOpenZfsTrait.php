<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOpenZfs;

trait CreateLocationFsxOpenZfsTrait
{
    /**
     * @param CreateLocationFsxOpenZfsRequest $args
     * @return CreateLocationFsxOpenZfsResponse
     */
    public function createLocationFsxOpenZfs(CreateLocationFsxOpenZfsRequest $args)
    {
        $result = parent::createLocationFsxOpenZfs($args->toArray());
        return new CreateLocationFsxOpenZfsResponse($result->toArray());
    }
}
