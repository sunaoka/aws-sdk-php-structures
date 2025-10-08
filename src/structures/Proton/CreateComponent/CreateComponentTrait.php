<?php

namespace Sunaoka\Aws\Structures\Proton\CreateComponent;

trait CreateComponentTrait
{
    /**
     * @param CreateComponentRequest $args
     * @return CreateComponentResponse
     */
    public function createComponent(CreateComponentRequest $args)
    {
        $result = parent::createComponent($args->toArray());
        return new CreateComponentResponse($result->toArray());
    }
}
