<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteWebACL;

trait DeleteWebACLTrait
{
    /**
     * @param DeleteWebACLRequest $args
     * @return DeleteWebACLResponse
     */
    public function deleteWebACL(DeleteWebACLRequest $args)
    {
        $result = parent::deleteWebACL($args->toArray());
        return new DeleteWebACLResponse($result->toArray());
    }
}
