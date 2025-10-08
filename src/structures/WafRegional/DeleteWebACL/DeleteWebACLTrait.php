<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteWebACL;

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
