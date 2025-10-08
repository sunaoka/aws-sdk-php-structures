<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListReplays;

trait ListReplaysTrait
{
    /**
     * @param ListReplaysRequest $args
     * @return ListReplaysResponse
     */
    public function listReplays(ListReplaysRequest $args)
    {
        $result = parent::listReplays($args->toArray());
        return new ListReplaysResponse($result->toArray());
    }
}
