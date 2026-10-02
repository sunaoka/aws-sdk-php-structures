<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionRevision;

trait CreateWebFunctionRevisionTrait
{
    /**
     * @param CreateWebFunctionRevisionRequest $args
     * @return CreateWebFunctionRevisionResponse
     */
    public function createWebFunctionRevision(CreateWebFunctionRevisionRequest $args)
    {
        $result = parent::createWebFunctionRevision($args->toArray());
        return new CreateWebFunctionRevisionResponse($result->toArray());
    }
}
