<?php

namespace Sunaoka\Aws\Structures\Connect\GetContactAttributes;

trait GetContactAttributesTrait
{
    /**
     * @param GetContactAttributesRequest $args
     * @return GetContactAttributesResponse
     */
    public function getContactAttributes(GetContactAttributesRequest $args)
    {
        $result = parent::getContactAttributes($args->toArray());
        return new GetContactAttributesResponse($result->toArray());
    }
}
