<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListSchemas;

trait ListSchemasTrait
{
    /**
     * @param ListSchemasRequest $args
     * @return ListSchemasResponse
     */
    public function listSchemas(ListSchemasRequest $args)
    {
        $result = parent::listSchemas($args->toArray());
        return new ListSchemasResponse($result->toArray());
    }
}
