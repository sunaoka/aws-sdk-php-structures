<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateContext;

trait CreateContextTrait
{
    /**
     * @param CreateContextRequest $args
     * @return CreateContextResponse
     */
    public function createContext(CreateContextRequest $args)
    {
        $result = parent::createContext($args->toArray());
        return new CreateContextResponse($result->toArray());
    }
}
