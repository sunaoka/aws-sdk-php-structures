<?php

namespace Sunaoka\Aws\Structures\AppSync\GetType;

trait GetTypeTrait
{
    /**
     * @param GetTypeRequest $args
     * @return GetTypeResponse
     */
    public function getType(GetTypeRequest $args)
    {
        $result = parent::getType($args->toArray());
        return new GetTypeResponse($result->toArray());
    }
}
