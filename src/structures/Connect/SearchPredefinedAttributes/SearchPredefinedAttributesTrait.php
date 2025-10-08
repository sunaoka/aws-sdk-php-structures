<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPredefinedAttributes;

trait SearchPredefinedAttributesTrait
{
    /**
     * @param SearchPredefinedAttributesRequest $args
     * @return SearchPredefinedAttributesResponse
     */
    public function searchPredefinedAttributes(SearchPredefinedAttributesRequest $args)
    {
        $result = parent::searchPredefinedAttributes($args->toArray());
        return new SearchPredefinedAttributesResponse($result->toArray());
    }
}
