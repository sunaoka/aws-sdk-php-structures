<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateSpace;

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
