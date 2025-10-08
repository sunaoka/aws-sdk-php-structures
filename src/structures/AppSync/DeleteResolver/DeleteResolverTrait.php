<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteResolver;

trait DeleteResolverTrait
{
    /**
     * @param DeleteResolverRequest $args
     * @return DeleteResolverResponse
     */
    public function deleteResolver(DeleteResolverRequest $args)
    {
        $result = parent::deleteResolver($args->toArray());
        return new DeleteResolverResponse($result->toArray());
    }
}
