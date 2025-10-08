<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataAccessor;

trait UpdateDataAccessorTrait
{
    /**
     * @param UpdateDataAccessorRequest $args
     * @return UpdateDataAccessorResponse
     */
    public function updateDataAccessor(UpdateDataAccessorRequest $args)
    {
        $result = parent::updateDataAccessor($args->toArray());
        return new UpdateDataAccessorResponse($result->toArray());
    }
}
