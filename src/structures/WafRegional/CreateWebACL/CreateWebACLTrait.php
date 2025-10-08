<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateWebACL;

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
