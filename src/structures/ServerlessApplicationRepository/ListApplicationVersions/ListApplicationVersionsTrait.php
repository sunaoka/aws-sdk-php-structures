<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationVersions;

trait ListApplicationVersionsTrait
{
    /**
     * @param ListApplicationVersionsRequest $args
     * @return ListApplicationVersionsResponse
     */
    public function listApplicationVersions(ListApplicationVersionsRequest $args)
    {
        $result = parent::listApplicationVersions($args->toArray());
        return new ListApplicationVersionsResponse($result->toArray());
    }
}
