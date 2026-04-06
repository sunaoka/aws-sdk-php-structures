<?php

namespace Sunaoka\Aws\Structures\Keyspaces\DeleteType;

trait DeleteTypeTrait
{
    /**
     * @param DeleteTypeRequest $args
     * @return DeleteTypeResponse
     */
    public function deleteType(DeleteTypeRequest $args)
    {
        $result = parent::deleteType($args->toArray());
        return new DeleteTypeResponse($result->toArray());
    }
}
