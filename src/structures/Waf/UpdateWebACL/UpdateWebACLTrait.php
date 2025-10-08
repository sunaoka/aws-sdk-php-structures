<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateWebACL;

trait UpdateWebACLTrait
{
    /**
     * @param UpdateWebACLRequest $args
     * @return UpdateWebACLResponse
     */
    public function updateWebACL(UpdateWebACLRequest $args)
    {
        $result = parent::updateWebACL($args->toArray());
        return new UpdateWebACLResponse($result->toArray());
    }
}
