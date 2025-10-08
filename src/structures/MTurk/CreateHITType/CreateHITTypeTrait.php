<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITType;

trait CreateHITTypeTrait
{
    /**
     * @param CreateHITTypeRequest $args
     * @return CreateHITTypeResponse
     */
    public function createHITType(CreateHITTypeRequest $args)
    {
        $result = parent::createHITType($args->toArray());
        return new CreateHITTypeResponse($result->toArray());
    }
}
