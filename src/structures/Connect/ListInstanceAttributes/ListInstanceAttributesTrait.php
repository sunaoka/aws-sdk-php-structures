<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceAttributes;

trait ListInstanceAttributesTrait
{
    /**
     * @param ListInstanceAttributesRequest $args
     * @return ListInstanceAttributesResponse
     */
    public function listInstanceAttributes(ListInstanceAttributesRequest $args)
    {
        $result = parent::listInstanceAttributes($args->toArray());
        return new ListInstanceAttributesResponse($result->toArray());
    }
}
