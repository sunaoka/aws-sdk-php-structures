<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateObjectAttributes;

trait UpdateObjectAttributesTrait
{
    /**
     * @param UpdateObjectAttributesRequest $args
     * @return UpdateObjectAttributesResponse
     */
    public function updateObjectAttributes(UpdateObjectAttributesRequest $args)
    {
        $result = parent::updateObjectAttributes($args->toArray());
        return new UpdateObjectAttributesResponse($result->toArray());
    }
}
