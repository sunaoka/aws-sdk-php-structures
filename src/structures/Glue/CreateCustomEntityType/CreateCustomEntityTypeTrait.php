<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCustomEntityType;

trait CreateCustomEntityTypeTrait
{
    /**
     * @param CreateCustomEntityTypeRequest $args
     * @return CreateCustomEntityTypeResponse
     */
    public function createCustomEntityType(CreateCustomEntityTypeRequest $args)
    {
        $result = parent::createCustomEntityType($args->toArray());
        return new CreateCustomEntityTypeResponse($result->toArray());
    }
}
