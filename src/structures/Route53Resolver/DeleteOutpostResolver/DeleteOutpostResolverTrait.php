<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteOutpostResolver;

trait DeleteOutpostResolverTrait
{
    /**
     * @param DeleteOutpostResolverRequest $args
     * @return DeleteOutpostResolverResponse
     */
    public function deleteOutpostResolver(DeleteOutpostResolverRequest $args)
    {
        $result = parent::deleteOutpostResolver($args->toArray());
        return new DeleteOutpostResolverResponse($result->toArray());
    }
}
