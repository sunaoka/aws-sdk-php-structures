<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAssociationsOnce;

trait StartAssociationsOnceTrait
{
    /**
     * @param StartAssociationsOnceRequest $args
     * @return StartAssociationsOnceResponse
     */
    public function startAssociationsOnce(StartAssociationsOnceRequest $args)
    {
        $result = parent::startAssociationsOnce($args->toArray());
        return new StartAssociationsOnceResponse($result->toArray());
    }
}
