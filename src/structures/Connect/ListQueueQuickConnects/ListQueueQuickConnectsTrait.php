<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueQuickConnects;

trait ListQueueQuickConnectsTrait
{
    /**
     * @param ListQueueQuickConnectsRequest $args
     * @return ListQueueQuickConnectsResponse
     */
    public function listQueueQuickConnects(ListQueueQuickConnectsRequest $args)
    {
        $result = parent::listQueueQuickConnects($args->toArray());
        return new ListQueueQuickConnectsResponse($result->toArray());
    }
}
