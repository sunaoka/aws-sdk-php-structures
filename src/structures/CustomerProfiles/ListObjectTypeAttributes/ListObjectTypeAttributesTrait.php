<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListObjectTypeAttributes;

trait ListObjectTypeAttributesTrait
{
    /**
     * @param ListObjectTypeAttributesRequest $args
     * @return ListObjectTypeAttributesResponse
     */
    public function listObjectTypeAttributes(ListObjectTypeAttributesRequest $args)
    {
        $result = parent::listObjectTypeAttributes($args->toArray());
        return new ListObjectTypeAttributesResponse($result->toArray());
    }
}
