<?php

namespace Sunaoka\Aws\Structures\Ecs\ListAttributes;

trait ListAttributesTrait
{
    /**
     * @param ListAttributesRequest $args
     * @return ListAttributesResponse
     */
    public function listAttributes(ListAttributesRequest $args)
    {
        $result = parent::listAttributes($args->toArray());
        return new ListAttributesResponse($result->toArray());
    }
}
