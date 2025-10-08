<?php

namespace Sunaoka\Aws\Structures\Pinpoint\RemoveAttributes;

trait RemoveAttributesTrait
{
    /**
     * @param RemoveAttributesRequest $args
     * @return RemoveAttributesResponse
     */
    public function removeAttributes(RemoveAttributesRequest $args)
    {
        $result = parent::removeAttributes($args->toArray());
        return new RemoveAttributesResponse($result->toArray());
    }
}
