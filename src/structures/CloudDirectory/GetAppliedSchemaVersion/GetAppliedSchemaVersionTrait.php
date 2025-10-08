<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetAppliedSchemaVersion;

trait GetAppliedSchemaVersionTrait
{
    /**
     * @param GetAppliedSchemaVersionRequest $args
     * @return GetAppliedSchemaVersionResponse
     */
    public function getAppliedSchemaVersion(GetAppliedSchemaVersionRequest $args)
    {
        $result = parent::getAppliedSchemaVersion($args->toArray());
        return new GetAppliedSchemaVersionResponse($result->toArray());
    }
}
