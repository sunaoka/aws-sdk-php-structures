<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL;

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
