<?php

namespace Sunaoka\Aws\Structures\Emr\CreateStudio;

trait CreateStudioTrait
{
    /**
     * @param CreateStudioRequest $args
     * @return CreateStudioResponse
     */
    public function createStudio(CreateStudioRequest $args)
    {
        $result = parent::createStudio($args->toArray());
        return new CreateStudioResponse($result->toArray());
    }
}
