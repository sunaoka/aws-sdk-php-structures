<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListSchemaMappings;

trait ListSchemaMappingsTrait
{
    /**
     * @param ListSchemaMappingsRequest $args
     * @return ListSchemaMappingsResponse
     */
    public function listSchemaMappings(ListSchemaMappingsRequest $args)
    {
        $result = parent::listSchemaMappings($args->toArray());
        return new ListSchemaMappingsResponse($result->toArray());
    }
}
