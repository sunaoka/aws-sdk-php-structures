<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListObjectTypeAttributeValues;

trait ListObjectTypeAttributeValuesTrait
{
    /**
     * @param ListObjectTypeAttributeValuesRequest $args
     * @return ListObjectTypeAttributeValuesResponse
     */
    public function listObjectTypeAttributeValues(ListObjectTypeAttributeValuesRequest $args)
    {
        $result = parent::listObjectTypeAttributeValues($args->toArray());
        return new ListObjectTypeAttributeValuesResponse($result->toArray());
    }
}
