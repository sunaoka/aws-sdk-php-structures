<?php

namespace Sunaoka\Aws\Structures\Ecs\GetTaskProtection;

trait GetTaskProtectionTrait
{
    /**
     * @param GetTaskProtectionRequest $args
     * @return GetTaskProtectionResponse
     */
    public function getTaskProtection(GetTaskProtectionRequest $args)
    {
        $result = parent::getTaskProtection($args->toArray());
        return new GetTaskProtectionResponse($result->toArray());
    }
}
