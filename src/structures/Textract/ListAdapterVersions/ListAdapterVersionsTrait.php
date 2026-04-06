<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapterVersions;

trait ListAdapterVersionsTrait
{
    /**
     * @param ListAdapterVersionsRequest $args
     * @return ListAdapterVersionsResponse
     */
    public function listAdapterVersions(ListAdapterVersionsRequest $args)
    {
        $result = parent::listAdapterVersions($args->toArray());
        return new ListAdapterVersionsResponse($result->toArray());
    }
}
