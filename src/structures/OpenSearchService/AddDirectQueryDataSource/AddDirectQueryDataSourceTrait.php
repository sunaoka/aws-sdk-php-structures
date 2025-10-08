<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddDirectQueryDataSource;

trait AddDirectQueryDataSourceTrait
{
    /**
     * @param AddDirectQueryDataSourceRequest $args
     * @return AddDirectQueryDataSourceResponse
     */
    public function addDirectQueryDataSource(AddDirectQueryDataSourceRequest $args)
    {
        $result = parent::addDirectQueryDataSource($args->toArray());
        return new AddDirectQueryDataSourceResponse($result->toArray());
    }
}
