<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateACL;

trait UpdateACLTrait
{
    /**
     * @param UpdateACLRequest $args
     * @return UpdateACLResponse
     */
    public function updateACL(UpdateACLRequest $args)
    {
        $result = parent::updateACL($args->toArray());
        return new UpdateACLResponse($result->toArray());
    }
}
