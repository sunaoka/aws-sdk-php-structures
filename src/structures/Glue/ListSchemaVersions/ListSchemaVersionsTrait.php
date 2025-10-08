<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemaVersions;

trait ListSchemaVersionsTrait
{
    /**
     * @param ListSchemaVersionsRequest $args
     * @return ListSchemaVersionsResponse
     */
    public function listSchemaVersions(ListSchemaVersionsRequest $args)
    {
        $result = parent::listSchemaVersions($args->toArray());
        return new ListSchemaVersionsResponse($result->toArray());
    }
}
