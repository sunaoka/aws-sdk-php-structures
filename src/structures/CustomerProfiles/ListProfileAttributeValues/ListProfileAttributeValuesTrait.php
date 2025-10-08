<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileAttributeValues;

trait ListProfileAttributeValuesTrait
{
    /**
     * @param ListProfileAttributeValuesRequest $args
     * @return ListProfileAttributeValuesResponse
     */
    public function listProfileAttributeValues(ListProfileAttributeValuesRequest $args)
    {
        $result = parent::listProfileAttributeValues($args->toArray());
        return new ListProfileAttributeValuesResponse($result->toArray());
    }
}
