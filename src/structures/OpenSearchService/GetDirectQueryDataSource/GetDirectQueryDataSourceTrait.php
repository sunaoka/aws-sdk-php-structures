<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDirectQueryDataSource;

trait GetDirectQueryDataSourceTrait
{
    /**
     * @param GetDirectQueryDataSourceRequest $args
     * @return GetDirectQueryDataSourceResponse
     */
    public function getDirectQueryDataSource(GetDirectQueryDataSourceRequest $args)
    {
        $result = parent::getDirectQueryDataSource($args->toArray());
        return new GetDirectQueryDataSourceResponse($result->toArray());
    }
}
