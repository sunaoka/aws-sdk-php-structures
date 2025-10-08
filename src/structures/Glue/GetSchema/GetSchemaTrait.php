<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchema;

trait GetSchemaTrait
{
    /**
     * @param GetSchemaRequest $args
     * @return GetSchemaResponse
     */
    public function getSchema(GetSchemaRequest $args)
    {
        $result = parent::getSchema($args->toArray());
        return new GetSchemaResponse($result->toArray());
    }
}
