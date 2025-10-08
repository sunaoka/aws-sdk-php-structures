<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateThreatEntitySet;

trait CreateThreatEntitySetTrait
{
    /**
     * @param CreateThreatEntitySetRequest $args
     * @return CreateThreatEntitySetResponse
     */
    public function createThreatEntitySet(CreateThreatEntitySetRequest $args)
    {
        $result = parent::createThreatEntitySet($args->toArray());
        return new CreateThreatEntitySetResponse($result->toArray());
    }
}
