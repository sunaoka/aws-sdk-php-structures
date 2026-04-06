<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudioComponent;

trait GetStudioComponentTrait
{
    /**
     * @param GetStudioComponentRequest $args
     * @return GetStudioComponentResponse
     */
    public function getStudioComponent(GetStudioComponentRequest $args)
    {
        $result = parent::getStudioComponent($args->toArray());
        return new GetStudioComponentResponse($result->toArray());
    }
}
