<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateAccessor;

trait CreateAccessorTrait
{
    /**
     * @param CreateAccessorRequest $args
     * @return CreateAccessorResponse
     */
    public function createAccessor(CreateAccessorRequest $args)
    {
        $result = parent::createAccessor($args->toArray());
        return new CreateAccessorResponse($result->toArray());
    }
}
