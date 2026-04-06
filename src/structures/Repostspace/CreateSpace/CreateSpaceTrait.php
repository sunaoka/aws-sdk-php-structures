<?php

namespace Sunaoka\Aws\Structures\Repostspace\CreateSpace;

trait CreateSpaceTrait
{
    /**
     * @param CreateSpaceRequest $args
     * @return CreateSpaceResponse
     */
    public function createSpace(CreateSpaceRequest $args)
    {
        $result = parent::createSpace($args->toArray());
        return new CreateSpaceResponse($result->toArray());
    }
}
