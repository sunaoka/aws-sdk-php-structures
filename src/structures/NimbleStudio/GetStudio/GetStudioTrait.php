<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudio;

trait GetStudioTrait
{
    /**
     * @param GetStudioRequest $args
     * @return GetStudioResponse
     */
    public function getStudio(GetStudioRequest $args)
    {
        $result = parent::getStudio($args->toArray());
        return new GetStudioResponse($result->toArray());
    }
}
