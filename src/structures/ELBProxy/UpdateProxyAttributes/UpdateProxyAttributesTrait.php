<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyAttributes;

trait UpdateProxyAttributesTrait
{
    /**
     * @param UpdateProxyAttributesRequest $args
     * @return UpdateProxyAttributesResponse
     */
    public function updateProxyAttributes(UpdateProxyAttributesRequest $args)
    {
        $result = parent::updateProxyAttributes($args->toArray());
        return new UpdateProxyAttributesResponse($result->toArray());
    }
}
