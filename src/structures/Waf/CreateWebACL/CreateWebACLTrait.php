<?php

namespace Sunaoka\Aws\Structures\Waf\CreateWebACL;

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
