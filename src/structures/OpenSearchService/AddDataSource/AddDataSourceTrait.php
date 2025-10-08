<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddDataSource;

trait AddDataSourceTrait
{
    /**
     * @param AddDataSourceRequest $args
     * @return AddDataSourceResponse
     */
    public function addDataSource(AddDataSourceRequest $args)
    {
        $result = parent::addDataSource($args->toArray());
        return new AddDataSourceResponse($result->toArray());
    }
}
