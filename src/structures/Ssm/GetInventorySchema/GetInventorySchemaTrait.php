<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventorySchema;

trait GetInventorySchemaTrait
{
    /**
     * @param GetInventorySchemaRequest $args
     * @return GetInventorySchemaResponse
     */
    public function getInventorySchema(GetInventorySchemaRequest $args)
    {
        $result = parent::getInventorySchema($args->toArray());
        return new GetInventorySchemaResponse($result->toArray());
    }
}
