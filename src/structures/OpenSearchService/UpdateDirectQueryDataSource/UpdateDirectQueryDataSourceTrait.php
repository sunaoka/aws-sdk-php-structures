<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDirectQueryDataSource;

trait UpdateDirectQueryDataSourceTrait
{
    /**
     * @param UpdateDirectQueryDataSourceRequest $args
     * @return UpdateDirectQueryDataSourceResponse
     */
    public function updateDirectQueryDataSource(UpdateDirectQueryDataSourceRequest $args)
    {
        $result = parent::updateDirectQueryDataSource($args->toArray());
        return new UpdateDirectQueryDataSourceResponse($result->toArray());
    }
}
