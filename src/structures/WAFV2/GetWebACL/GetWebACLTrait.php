<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL;

trait GetWebACLTrait
{
    /**
     * @param GetWebACLRequest $args
     * @return GetWebACLResponse
     */
    public function getWebACL(GetWebACLRequest $args)
    {
        $result = parent::getWebACL($args->toArray());
        return new GetWebACLResponse($result->toArray());
    }
}
