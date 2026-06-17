<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateThreat;

trait CreateThreatTrait
{
    /**
     * @param CreateThreatRequest $args
     * @return CreateThreatResponse
     */
    public function createThreat(CreateThreatRequest $args)
    {
        $result = parent::createThreat($args->toArray());
        return new CreateThreatResponse($result->toArray());
    }
}
