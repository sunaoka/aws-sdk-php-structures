<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListResourcesForWebACL;

trait ListResourcesForWebACLTrait
{
    /**
     * @param ListResourcesForWebACLRequest $args
     * @return ListResourcesForWebACLResponse
     */
    public function listResourcesForWebACL(ListResourcesForWebACLRequest $args)
    {
        $result = parent::listResourcesForWebACL($args->toArray());
        return new ListResourcesForWebACLResponse($result->toArray());
    }
}
