<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate;

trait StartResourceStateUpdateTrait
{
    /**
     * @param StartResourceStateUpdateRequest $args
     * @return StartResourceStateUpdateResponse
     */
    public function startResourceStateUpdate(StartResourceStateUpdateRequest $args)
    {
        $result = parent::startResourceStateUpdate($args->toArray());
        return new StartResourceStateUpdateResponse($result->toArray());
    }
}
