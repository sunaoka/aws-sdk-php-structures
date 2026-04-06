<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetTrustedEntitySet;

trait GetTrustedEntitySetTrait
{
    /**
     * @param GetTrustedEntitySetRequest $args
     * @return GetTrustedEntitySetResponse
     */
    public function getTrustedEntitySet(GetTrustedEntitySetRequest $args)
    {
        $result = parent::getTrustedEntitySet($args->toArray());
        return new GetTrustedEntitySetResponse($result->toArray());
    }
}
