<?php

namespace Sunaoka\Aws\Structures\AutoScaling\EnterStandby;

trait EnterStandbyTrait
{
    /**
     * @param EnterStandbyRequest $args
     * @return EnterStandbyResponse
     */
    public function enterStandby(EnterStandbyRequest $args)
    {
        $result = parent::enterStandby($args->toArray());
        return new EnterStandbyResponse($result->toArray());
    }
}
