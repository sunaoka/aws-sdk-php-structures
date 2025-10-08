<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListWebACLs;

trait ListWebACLsTrait
{
    /**
     * @param ListWebACLsRequest $args
     * @return ListWebACLsResponse
     */
    public function listWebACLs(ListWebACLsRequest $args)
    {
        $result = parent::listWebACLs($args->toArray());
        return new ListWebACLsResponse($result->toArray());
    }
}
