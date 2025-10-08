<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateACL;

trait CreateACLTrait
{
    /**
     * @param CreateACLRequest $args
     * @return CreateACLResponse
     */
    public function createACL(CreateACLRequest $args)
    {
        $result = parent::createACL($args->toArray());
        return new CreateACLResponse($result->toArray());
    }
}
