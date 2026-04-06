<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThingSchemas;

trait ListManagedThingSchemasTrait
{
    /**
     * @param ListManagedThingSchemasRequest $args
     * @return ListManagedThingSchemasResponse
     */
    public function listManagedThingSchemas(ListManagedThingSchemasRequest $args)
    {
        $result = parent::listManagedThingSchemas($args->toArray());
        return new ListManagedThingSchemasResponse($result->toArray());
    }
}
