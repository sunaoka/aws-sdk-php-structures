<?php

namespace Sunaoka\Aws\Structures\Support\ResolveCase;

trait ResolveCaseTrait
{
    /**
     * @param ResolveCaseRequest $args
     * @return ResolveCaseResponse
     */
    public function resolveCase(ResolveCaseRequest $args)
    {
        $result = parent::resolveCase($args->toArray());
        return new ResolveCaseResponse($result->toArray());
    }
}
