<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DetachDataSource;

trait DetachDataSourceTrait
{
    /**
     * @param DetachDataSourceRequest $args
     * @return DetachDataSourceResponse
     */
    public function detachDataSource(DetachDataSourceRequest $args)
    {
        $result = parent::detachDataSource($args->toArray());
        return new DetachDataSourceResponse($result->toArray());
    }
}
