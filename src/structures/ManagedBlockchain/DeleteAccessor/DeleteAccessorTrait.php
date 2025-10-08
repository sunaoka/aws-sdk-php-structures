<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\DeleteAccessor;

trait DeleteAccessorTrait
{
    /**
     * @param DeleteAccessorRequest $args
     * @return DeleteAccessorResponse
     */
    public function deleteAccessor(DeleteAccessorRequest $args)
    {
        $result = parent::deleteAccessor($args->toArray());
        return new DeleteAccessorResponse($result->toArray());
    }
}
