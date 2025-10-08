<?php

namespace Sunaoka\Aws\Structures\Pricing\GetAttributeValues;

trait GetAttributeValuesTrait
{
    /**
     * @param GetAttributeValuesRequest $args
     * @return GetAttributeValuesResponse
     */
    public function getAttributeValues(GetAttributeValuesRequest $args)
    {
        $result = parent::getAttributeValues($args->toArray());
        return new GetAttributeValuesResponse($result->toArray());
    }
}
