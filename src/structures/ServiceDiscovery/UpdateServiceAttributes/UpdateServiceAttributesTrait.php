<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateServiceAttributes;

trait UpdateServiceAttributesTrait
{
    /**
     * @param UpdateServiceAttributesRequest $args
     * @return UpdateServiceAttributesResponse
     */
    public function updateServiceAttributes(UpdateServiceAttributesRequest $args)
    {
        $result = parent::updateServiceAttributes($args->toArray());
        return new UpdateServiceAttributesResponse($result->toArray());
    }
}
