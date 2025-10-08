<?php

namespace Sunaoka\Aws\Structures\Account\StartPrimaryEmailUpdate;

trait StartPrimaryEmailUpdateTrait
{
    /**
     * @param StartPrimaryEmailUpdateRequest $args
     * @return StartPrimaryEmailUpdateResponse
     */
    public function startPrimaryEmailUpdate(StartPrimaryEmailUpdateRequest $args)
    {
        $result = parent::startPrimaryEmailUpdate($args->toArray());
        return new StartPrimaryEmailUpdateResponse($result->toArray());
    }
}
