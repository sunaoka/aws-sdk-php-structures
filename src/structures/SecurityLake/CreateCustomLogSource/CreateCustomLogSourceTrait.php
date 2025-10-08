<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateCustomLogSource;

trait CreateCustomLogSourceTrait
{
    /**
     * @param CreateCustomLogSourceRequest $args
     * @return CreateCustomLogSourceResponse
     */
    public function createCustomLogSource(CreateCustomLogSourceRequest $args)
    {
        $result = parent::createCustomLogSource($args->toArray());
        return new CreateCustomLogSourceResponse($result->toArray());
    }
}
