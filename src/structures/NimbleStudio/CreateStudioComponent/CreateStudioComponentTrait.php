<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStudioComponent;

trait CreateStudioComponentTrait
{
    /**
     * @param CreateStudioComponentRequest $args
     * @return CreateStudioComponentResponse
     */
    public function createStudioComponent(CreateStudioComponentRequest $args)
    {
        $result = parent::createStudioComponent($args->toArray());
        return new CreateStudioComponentResponse($result->toArray());
    }
}
