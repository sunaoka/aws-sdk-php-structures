<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetSystem;

trait GetSystemTrait
{
    /**
     * @param GetSystemRequest $args
     * @return GetSystemResponse
     */
    public function getSystem(GetSystemRequest $args)
    {
        $result = parent::getSystem($args->toArray());
        return new GetSystemResponse($result->toArray());
    }
}
