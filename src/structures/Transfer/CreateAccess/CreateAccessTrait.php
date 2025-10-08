<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateAccess;

trait CreateAccessTrait
{
    /**
     * @param CreateAccessRequest $args
     * @return CreateAccessResponse
     */
    public function createAccess(CreateAccessRequest $args)
    {
        $result = parent::createAccess($args->toArray());
        return new CreateAccessResponse($result->toArray());
    }
}
