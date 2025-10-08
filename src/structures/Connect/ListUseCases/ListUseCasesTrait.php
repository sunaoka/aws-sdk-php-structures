<?php

namespace Sunaoka\Aws\Structures\Connect\ListUseCases;

trait ListUseCasesTrait
{
    /**
     * @param ListUseCasesRequest $args
     * @return ListUseCasesResponse
     */
    public function listUseCases(ListUseCasesRequest $args)
    {
        $result = parent::listUseCases($args->toArray());
        return new ListUseCasesResponse($result->toArray());
    }
}
