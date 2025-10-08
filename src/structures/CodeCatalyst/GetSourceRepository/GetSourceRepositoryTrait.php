<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetSourceRepository;

trait GetSourceRepositoryTrait
{
    /**
     * @param GetSourceRepositoryRequest $args
     * @return GetSourceRepositoryResponse
     */
    public function getSourceRepository(GetSourceRepositoryRequest $args)
    {
        $result = parent::getSourceRepository($args->toArray());
        return new GetSourceRepositoryResponse($result->toArray());
    }
}
