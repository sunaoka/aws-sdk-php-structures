<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateAct;

trait CreateActTrait
{
    /**
     * @param CreateActRequest $args
     * @return CreateActResponse
     */
    public function createAct(CreateActRequest $args)
    {
        $result = parent::createAct($args->toArray());
        return new CreateActResponse($result->toArray());
    }
}
