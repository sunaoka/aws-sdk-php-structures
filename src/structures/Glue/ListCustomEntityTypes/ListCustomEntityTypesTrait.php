<?php

namespace Sunaoka\Aws\Structures\Glue\ListCustomEntityTypes;

trait ListCustomEntityTypesTrait
{
    /**
     * @param ListCustomEntityTypesRequest $args
     * @return ListCustomEntityTypesResponse
     */
    public function listCustomEntityTypes(ListCustomEntityTypesRequest $args)
    {
        $result = parent::listCustomEntityTypes($args->toArray());
        return new ListCustomEntityTypesResponse($result->toArray());
    }
}
