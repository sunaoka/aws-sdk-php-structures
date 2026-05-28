<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateSystem;

trait CreateSystemTrait
{
    /**
     * @param CreateSystemRequest $args
     * @return CreateSystemResponse
     */
    public function createSystem(CreateSystemRequest $args)
    {
        $result = parent::createSystem($args->toArray());
        return new CreateSystemResponse($result->toArray());
    }
}
