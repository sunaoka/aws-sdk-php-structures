<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteACL;

trait DeleteACLTrait
{
    /**
     * @param DeleteACLRequest $args
     * @return DeleteACLResponse
     */
    public function deleteACL(DeleteACLRequest $args)
    {
        $result = parent::deleteACL($args->toArray());
        return new DeleteACLResponse($result->toArray());
    }
}
