<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventsByWebACL;

trait ListEventsByWebACLTrait
{
    /**
     * @param ListEventsByWebACLRequest $args
     * @return ListEventsByWebACLResponse
     */
    public function listEventsByWebACL(ListEventsByWebACLRequest $args)
    {
        $result = parent::listEventsByWebACL($args->toArray());
        return new ListEventsByWebACLResponse($result->toArray());
    }
}
