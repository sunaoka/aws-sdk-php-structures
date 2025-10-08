<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListVersions;

trait ListVersionsTrait
{
    /**
     * @param ListVersionsRequest $args
     * @return ListVersionsResponse
     */
    public function listVersions(ListVersionsRequest $args)
    {
        $result = parent::listVersions($args->toArray());
        return new ListVersionsResponse($result->toArray());
    }
}
