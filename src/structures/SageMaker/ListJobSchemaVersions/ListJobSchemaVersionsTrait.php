<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListJobSchemaVersions;

trait ListJobSchemaVersionsTrait
{
    /**
     * @param ListJobSchemaVersionsRequest $args
     * @return ListJobSchemaVersionsResponse
     */
    public function listJobSchemaVersions(ListJobSchemaVersionsRequest $args)
    {
        $result = parent::listJobSchemaVersions($args->toArray());
        return new ListJobSchemaVersionsResponse($result->toArray());
    }
}
