<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DeleteSchema;

trait DeleteSchemaTrait
{
    /**
     * @param DeleteSchemaRequest $args
     * @return DeleteSchemaResponse
     */
    public function deleteSchema(DeleteSchemaRequest $args)
    {
        $result = parent::deleteSchema($args->toArray());
        return new DeleteSchemaResponse($result->toArray());
    }
}
