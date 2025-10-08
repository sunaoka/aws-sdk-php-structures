<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateIPSet;

trait CreateIPSetTrait
{
    /**
     * @param CreateIPSetRequest $args
     * @return CreateIPSetResponse
     */
    public function createIPSet(CreateIPSetRequest $args)
    {
        $result = parent::createIPSet($args->toArray());
        return new CreateIPSetResponse($result->toArray());
    }
}
