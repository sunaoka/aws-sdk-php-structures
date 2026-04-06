<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateType;

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
