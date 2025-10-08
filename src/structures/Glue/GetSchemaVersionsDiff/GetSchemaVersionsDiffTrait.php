<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersionsDiff;

trait GetSchemaVersionsDiffTrait
{
    /**
     * @param GetSchemaVersionsDiffRequest $args
     * @return GetSchemaVersionsDiffResponse
     */
    public function getSchemaVersionsDiff(GetSchemaVersionsDiffRequest $args)
    {
        $result = parent::getSchemaVersionsDiff($args->toArray());
        return new GetSchemaVersionsDiffResponse($result->toArray());
    }
}
