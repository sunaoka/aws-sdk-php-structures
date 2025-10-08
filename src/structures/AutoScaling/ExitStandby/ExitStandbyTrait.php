<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ExitStandby;

trait ExitStandbyTrait
{
    /**
     * @param ExitStandbyRequest $args
     * @return ExitStandbyResponse
     */
    public function exitStandby(ExitStandbyRequest $args)
    {
        $result = parent::exitStandby($args->toArray());
        return new ExitStandbyResponse($result->toArray());
    }
}
