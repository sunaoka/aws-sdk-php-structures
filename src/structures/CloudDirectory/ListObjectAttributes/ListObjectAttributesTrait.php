<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectAttributes;

trait ListObjectAttributesTrait
{
    /**
     * @param ListObjectAttributesRequest $args
     * @return ListObjectAttributesResponse
     */
    public function listObjectAttributes(ListObjectAttributesRequest $args)
    {
        $result = parent::listObjectAttributes($args->toArray());
        return new ListObjectAttributesResponse($result->toArray());
    }
}
