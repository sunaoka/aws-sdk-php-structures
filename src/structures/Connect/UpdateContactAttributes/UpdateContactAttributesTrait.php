<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactAttributes;

trait UpdateContactAttributesTrait
{
    /**
     * @param UpdateContactAttributesRequest $args
     * @return UpdateContactAttributesResponse
     */
    public function updateContactAttributes(UpdateContactAttributesRequest $args)
    {
        $result = parent::updateContactAttributes($args->toArray());
        return new UpdateContactAttributesResponse($result->toArray());
    }
}
