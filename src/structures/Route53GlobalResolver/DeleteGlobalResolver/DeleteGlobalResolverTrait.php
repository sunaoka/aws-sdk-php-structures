<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteGlobalResolver;

trait DeleteGlobalResolverTrait
{
    /**
     * @param DeleteGlobalResolverRequest $args
     * @return DeleteGlobalResolverResponse
     */
    public function deleteGlobalResolver(DeleteGlobalResolverRequest $args)
    {
        $result = parent::deleteGlobalResolver($args->toArray());
        return new DeleteGlobalResolverResponse($result->toArray());
    }
}
