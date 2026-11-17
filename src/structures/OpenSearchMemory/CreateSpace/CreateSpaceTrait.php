<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateSpace;

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
