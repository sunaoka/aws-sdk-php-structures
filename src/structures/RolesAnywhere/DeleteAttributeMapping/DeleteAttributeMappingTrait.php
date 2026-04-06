<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteAttributeMapping;

trait DeleteAttributeMappingTrait
{
    /**
     * @param DeleteAttributeMappingRequest $args
     * @return DeleteAttributeMappingResponse
     */
    public function deleteAttributeMapping(DeleteAttributeMappingRequest $args)
    {
        $result = parent::deleteAttributeMapping($args->toArray());
        return new DeleteAttributeMappingResponse($result->toArray());
    }
}
