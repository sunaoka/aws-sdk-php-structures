<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateLag;

trait CreateLagTrait
{
    /**
     * @param CreateLagRequest $args
     * @return CreateLagResponse
     */
    public function createLag(CreateLagRequest $args)
    {
        $result = parent::createLag($args->toArray());
        return new CreateLagResponse($result->toArray());
    }
}
