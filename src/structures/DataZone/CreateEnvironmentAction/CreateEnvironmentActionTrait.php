<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentAction;

trait CreateEnvironmentActionTrait
{
    /**
     * @param CreateEnvironmentActionRequest $args
     * @return CreateEnvironmentActionResponse
     */
    public function createEnvironmentAction(CreateEnvironmentActionRequest $args)
    {
        $result = parent::createEnvironmentAction($args->toArray());
        return new CreateEnvironmentActionResponse($result->toArray());
    }
}
