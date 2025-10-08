<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetPackageVersionHistory;

trait GetPackageVersionHistoryTrait
{
    /**
     * @param GetPackageVersionHistoryRequest $args
     * @return GetPackageVersionHistoryResponse
     */
    public function getPackageVersionHistory(GetPackageVersionHistoryRequest $args)
    {
        $result = parent::getPackageVersionHistory($args->toArray());
        return new GetPackageVersionHistoryResponse($result->toArray());
    }
}
