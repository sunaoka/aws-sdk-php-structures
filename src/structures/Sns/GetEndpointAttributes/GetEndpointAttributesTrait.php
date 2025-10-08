<?php

namespace Sunaoka\Aws\Structures\Sns\GetEndpointAttributes;

trait GetEndpointAttributesTrait
{
    /**
     * @param GetEndpointAttributesRequest $args
     * @return GetEndpointAttributesResponse
     */
    public function getEndpointAttributes(GetEndpointAttributesRequest $args)
    {
        $result = parent::getEndpointAttributes($args->toArray());
        return new GetEndpointAttributesResponse($result->toArray());
    }
}
