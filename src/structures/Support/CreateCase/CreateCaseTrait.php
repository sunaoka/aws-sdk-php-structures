<?php

namespace Sunaoka\Aws\Structures\Support\CreateCase;

trait CreateCaseTrait
{
    /**
     * @param CreateCaseRequest $args
     * @return CreateCaseResponse
     */
    public function createCase(CreateCaseRequest $args)
    {
        $result = parent::createCase($args->toArray());
        return new CreateCaseResponse($result->toArray());
    }
}
