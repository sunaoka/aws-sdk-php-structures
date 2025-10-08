<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterSchemaVersion;

trait RegisterSchemaVersionTrait
{
    /**
     * @param RegisterSchemaVersionRequest $args
     * @return RegisterSchemaVersionResponse
     */
    public function registerSchemaVersion(RegisterSchemaVersionRequest $args)
    {
        $result = parent::registerSchemaVersion($args->toArray());
        return new RegisterSchemaVersionResponse($result->toArray());
    }
}
