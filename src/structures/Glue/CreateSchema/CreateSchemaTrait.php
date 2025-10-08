<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSchema;

trait CreateSchemaTrait
{
    /**
     * @param CreateSchemaRequest $args
     * @return CreateSchemaResponse
     */
    public function createSchema(CreateSchemaRequest $args)
    {
        $result = parent::createSchema($args->toArray());
        return new CreateSchemaResponse($result->toArray());
    }
}
