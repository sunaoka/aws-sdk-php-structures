<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets;

trait PutTargetsTrait
{
    /**
     * @param PutTargetsRequest $args
     * @return PutTargetsResponse
     */
    public function putTargets(PutTargetsRequest $args)
    {
        $result = parent::putTargets($args->toArray());
        return new PutTargetsResponse($result->toArray());
    }
}
