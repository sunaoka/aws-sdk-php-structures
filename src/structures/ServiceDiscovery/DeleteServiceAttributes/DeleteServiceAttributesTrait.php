<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DeleteServiceAttributes;

trait DeleteServiceAttributesTrait
{
    /**
     * @param DeleteServiceAttributesRequest $args
     * @return DeleteServiceAttributesResponse
     */
    public function deleteServiceAttributes(DeleteServiceAttributesRequest $args)
    {
        $result = parent::deleteServiceAttributes($args->toArray());
        return new DeleteServiceAttributesResponse($result->toArray());
    }
}
