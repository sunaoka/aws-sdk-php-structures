<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAccountPool;

trait CreateAccountPoolTrait
{
    /**
     * @param CreateAccountPoolRequest $args
     * @return CreateAccountPoolResponse
     */
    public function createAccountPool(CreateAccountPoolRequest $args)
    {
        $result = parent::createAccountPool($args->toArray());
        return new CreateAccountPoolResponse($result->toArray());
    }
}
