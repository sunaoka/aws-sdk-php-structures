<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTableAttributes;

trait ListDataTableAttributesTrait
{
    /**
     * @param ListDataTableAttributesRequest $args
     * @return ListDataTableAttributesResponse
     */
    public function listDataTableAttributes(ListDataTableAttributesRequest $args)
    {
        $result = parent::listDataTableAttributes($args->toArray());
        return new ListDataTableAttributesResponse($result->toArray());
    }
}
