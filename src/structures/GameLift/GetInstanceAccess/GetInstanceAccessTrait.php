<?php

namespace Sunaoka\Aws\Structures\GameLift\GetInstanceAccess;

trait GetInstanceAccessTrait
{
    /**
     * @param GetInstanceAccessRequest $args
     * @return GetInstanceAccessResponse
     */
    public function getInstanceAccess(GetInstanceAccessRequest $args)
    {
        $result = parent::getInstanceAccess($args->toArray());
        return new GetInstanceAccessResponse($result->toArray());
    }
}
