<?php

namespace Sunaoka\Aws\Structures\Connect\CreateDataTableAttribute;

trait CreateDataTableAttributeTrait
{
    /**
     * @param CreateDataTableAttributeRequest $args
     * @return CreateDataTableAttributeResponse
     */
    public function createDataTableAttribute(CreateDataTableAttributeRequest $args)
    {
        $result = parent::createDataTableAttribute($args->toArray());
        return new CreateDataTableAttributeResponse($result->toArray());
    }
}
