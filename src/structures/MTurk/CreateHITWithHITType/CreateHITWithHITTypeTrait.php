<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITWithHITType;

trait CreateHITWithHITTypeTrait
{
    /**
     * @param CreateHITWithHITTypeRequest $args
     * @return CreateHITWithHITTypeResponse
     */
    public function createHITWithHITType(CreateHITWithHITTypeRequest $args)
    {
        $result = parent::createHITWithHITType($args->toArray());
        return new CreateHITWithHITTypeResponse($result->toArray());
    }
}
