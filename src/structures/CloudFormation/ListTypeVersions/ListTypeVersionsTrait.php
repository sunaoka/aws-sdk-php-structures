<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeVersions;

trait ListTypeVersionsTrait
{
    /**
     * @param ListTypeVersionsRequest $args
     * @return ListTypeVersionsResponse
     */
    public function listTypeVersions(ListTypeVersionsRequest $args)
    {
        $result = parent::listTypeVersions($args->toArray());
        return new ListTypeVersionsResponse($result->toArray());
    }
}
