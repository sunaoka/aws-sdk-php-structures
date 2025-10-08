<?php

namespace Sunaoka\Aws\Structures\Glue\GetCustomEntityType;

trait GetCustomEntityTypeTrait
{
    /**
     * @param GetCustomEntityTypeRequest $args
     * @return GetCustomEntityTypeResponse
     */
    public function getCustomEntityType(GetCustomEntityTypeRequest $args)
    {
        $result = parent::getCustomEntityType($args->toArray());
        return new GetCustomEntityTypeResponse($result->toArray());
    }
}
