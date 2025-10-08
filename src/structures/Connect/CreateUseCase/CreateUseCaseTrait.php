<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUseCase;

trait CreateUseCaseTrait
{
    /**
     * @param CreateUseCaseRequest $args
     * @return CreateUseCaseResponse
     */
    public function createUseCase(CreateUseCaseRequest $args)
    {
        $result = parent::createUseCase($args->toArray());
        return new CreateUseCaseResponse($result->toArray());
    }
}
