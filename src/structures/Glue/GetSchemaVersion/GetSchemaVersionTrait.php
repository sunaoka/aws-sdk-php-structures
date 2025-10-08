<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersion;

trait GetSchemaVersionTrait
{
    /**
     * @param GetSchemaVersionRequest $args
     * @return GetSchemaVersionResponse
     */
    public function getSchemaVersion(GetSchemaVersionRequest $args)
    {
        $result = parent::getSchemaVersion($args->toArray());
        return new GetSchemaVersionResponse($result->toArray());
    }
}
