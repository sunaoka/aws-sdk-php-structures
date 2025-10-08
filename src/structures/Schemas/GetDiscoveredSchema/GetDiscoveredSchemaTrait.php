<?php

namespace Sunaoka\Aws\Structures\Schemas\GetDiscoveredSchema;

trait GetDiscoveredSchemaTrait
{
    /**
     * @param GetDiscoveredSchemaRequest $args
     * @return GetDiscoveredSchemaResponse
     */
    public function getDiscoveredSchema(GetDiscoveredSchemaRequest $args)
    {
        $result = parent::getDiscoveredSchema($args->toArray());
        return new GetDiscoveredSchemaResponse($result->toArray());
    }
}
