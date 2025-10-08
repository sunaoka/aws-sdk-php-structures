<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchema;

trait BatchGetSchemaTrait
{
    /**
     * @param BatchGetSchemaRequest $args
     * @return BatchGetSchemaResponse
     */
    public function batchGetSchema(BatchGetSchemaRequest $args)
    {
        $result = parent::batchGetSchema($args->toArray());
        return new BatchGetSchemaResponse($result->toArray());
    }
}
