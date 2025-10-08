<?php

namespace Sunaoka\Aws\Structures\AppSync\GetSchemaCreationStatus;

trait GetSchemaCreationStatusTrait
{
    /**
     * @param GetSchemaCreationStatusRequest $args
     * @return GetSchemaCreationStatusResponse
     */
    public function getSchemaCreationStatus(GetSchemaCreationStatusRequest $args)
    {
        $result = parent::getSchemaCreationStatus($args->toArray());
        return new GetSchemaCreationStatusResponse($result->toArray());
    }
}
