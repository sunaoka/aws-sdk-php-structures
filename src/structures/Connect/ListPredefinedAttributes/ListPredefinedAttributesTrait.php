<?php

namespace Sunaoka\Aws\Structures\Connect\ListPredefinedAttributes;

trait ListPredefinedAttributesTrait
{
    /**
     * @param ListPredefinedAttributesRequest $args
     * @return ListPredefinedAttributesResponse
     */
    public function listPredefinedAttributes(ListPredefinedAttributesRequest $args)
    {
        $result = parent::listPredefinedAttributes($args->toArray());
        return new ListPredefinedAttributesResponse($result->toArray());
    }
}
