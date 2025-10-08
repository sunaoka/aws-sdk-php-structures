<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateSourceLocation;

trait CreateSourceLocationTrait
{
    /**
     * @param CreateSourceLocationRequest $args
     * @return CreateSourceLocationResponse
     */
    public function createSourceLocation(CreateSourceLocationRequest $args)
    {
        $result = parent::createSourceLocation($args->toArray());
        return new CreateSourceLocationResponse($result->toArray());
    }
}
