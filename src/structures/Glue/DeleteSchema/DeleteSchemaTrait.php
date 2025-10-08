<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchema;

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
