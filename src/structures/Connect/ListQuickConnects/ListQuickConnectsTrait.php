<?php

namespace Sunaoka\Aws\Structures\Connect\ListQuickConnects;

trait ListQuickConnectsTrait
{
    /**
     * @param ListQuickConnectsRequest $args
     * @return ListQuickConnectsResponse
     */
    public function listQuickConnects(ListQuickConnectsRequest $args)
    {
        $result = parent::listQuickConnects($args->toArray());
        return new ListQuickConnectsResponse($result->toArray());
    }
}
