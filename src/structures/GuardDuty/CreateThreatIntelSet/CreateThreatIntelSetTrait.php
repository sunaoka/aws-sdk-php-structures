<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateThreatIntelSet;

trait CreateThreatIntelSetTrait
{
    /**
     * @param CreateThreatIntelSetRequest $args
     * @return CreateThreatIntelSetResponse
     */
    public function createThreatIntelSet(CreateThreatIntelSetRequest $args)
    {
        $result = parent::createThreatIntelSet($args->toArray());
        return new CreateThreatIntelSetResponse($result->toArray());
    }
}
