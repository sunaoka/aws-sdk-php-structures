<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyAttributes;

trait GetProxyAttributesTrait
{
    /**
     * @param GetProxyAttributesRequest $args
     * @return GetProxyAttributesResponse
     */
    public function getProxyAttributes(GetProxyAttributesRequest $args)
    {
        $result = parent::getProxyAttributes($args->toArray());
        return new GetProxyAttributesResponse($result->toArray());
    }
}
