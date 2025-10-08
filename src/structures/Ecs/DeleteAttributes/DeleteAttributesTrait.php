<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteAttributes;

trait DeleteAttributesTrait
{
    /**
     * @param DeleteAttributesRequest $args
     * @return DeleteAttributesResponse
     */
    public function deleteAttributes(DeleteAttributesRequest $args)
    {
        $result = parent::deleteAttributes($args->toArray());
        return new DeleteAttributesResponse($result->toArray());
    }
}
