<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL;

trait CreateWebACLTrait
{
    /**
     * @param CreateWebACLRequest $args
     * @return CreateWebACLResponse
     */
    public function createWebACL(CreateWebACLRequest $args)
    {
        $result = parent::createWebACL($args->toArray());
        return new CreateWebACLResponse($result->toArray());
    }
}
