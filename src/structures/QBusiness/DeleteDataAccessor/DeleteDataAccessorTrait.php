<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteDataAccessor;

trait DeleteDataAccessorTrait
{
    /**
     * @param DeleteDataAccessorRequest $args
     * @return DeleteDataAccessorResponse
     */
    public function deleteDataAccessor(DeleteDataAccessorRequest $args)
    {
        $result = parent::deleteDataAccessor($args->toArray());
        return new DeleteDataAccessorResponse($result->toArray());
    }
}
