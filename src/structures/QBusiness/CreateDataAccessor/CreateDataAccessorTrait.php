<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataAccessor;

trait CreateDataAccessorTrait
{
    /**
     * @param CreateDataAccessorRequest $args
     * @return CreateDataAccessorResponse
     */
    public function createDataAccessor(CreateDataAccessorRequest $args)
    {
        $result = parent::createDataAccessor($args->toArray());
        return new CreateDataAccessorResponse($result->toArray());
    }
}
