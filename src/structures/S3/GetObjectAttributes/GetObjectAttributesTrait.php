<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes;

trait GetObjectAttributesTrait
{
    /**
     * @param GetObjectAttributesRequest $args
     * @return GetObjectAttributesResponse
     */
    public function getObjectAttributes(GetObjectAttributesRequest $args)
    {
        $result = parent::getObjectAttributes($args->toArray());
        return new GetObjectAttributesResponse($result->toArray());
    }
}
