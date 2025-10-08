<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateResolverType;

trait UpdateResolverTypeTrait
{
    /**
     * @param UpdateResolverTypeRequest $args
     * @return UpdateResolverTypeResponse
     */
    public function updateResolverType(UpdateResolverTypeRequest $args)
    {
        $result = parent::updateResolverType($args->toArray());
        return new UpdateResolverTypeResponse($result->toArray());
    }
}
