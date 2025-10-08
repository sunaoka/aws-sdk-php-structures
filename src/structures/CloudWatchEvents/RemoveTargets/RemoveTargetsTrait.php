<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\RemoveTargets;

trait RemoveTargetsTrait
{
    /**
     * @param RemoveTargetsRequest $args
     * @return RemoveTargetsResponse
     */
    public function removeTargets(RemoveTargetsRequest $args)
    {
        $result = parent::removeTargets($args->toArray());
        return new RemoveTargetsResponse($result->toArray());
    }
}
