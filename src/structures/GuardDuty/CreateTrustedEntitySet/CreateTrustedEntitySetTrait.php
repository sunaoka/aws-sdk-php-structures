<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateTrustedEntitySet;

trait CreateTrustedEntitySetTrait
{
    /**
     * @param CreateTrustedEntitySetRequest $args
     * @return CreateTrustedEntitySetResponse
     */
    public function createTrustedEntitySet(CreateTrustedEntitySetRequest $args)
    {
        $result = parent::createTrustedEntitySet($args->toArray());
        return new CreateTrustedEntitySetResponse($result->toArray());
    }
}
