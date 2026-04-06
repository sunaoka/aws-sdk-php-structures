<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentAction;

trait GetEnvironmentActionTrait
{
    /**
     * @param GetEnvironmentActionRequest $args
     * @return GetEnvironmentActionResponse
     */
    public function getEnvironmentAction(GetEnvironmentActionRequest $args)
    {
        $result = parent::getEnvironmentAction($args->toArray());
        return new GetEnvironmentActionResponse($result->toArray());
    }
}
