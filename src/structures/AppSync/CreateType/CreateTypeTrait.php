<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateType;

trait CreateTypeTrait
{
    /**
     * @param CreateTypeRequest $args
     * @return CreateTypeResponse
     */
    public function createType(CreateTypeRequest $args)
    {
        $result = parent::createType($args->toArray());
        return new CreateTypeResponse($result->toArray());
    }
}
