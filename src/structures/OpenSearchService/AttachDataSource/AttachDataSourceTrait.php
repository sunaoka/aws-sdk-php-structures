<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AttachDataSource;

trait AttachDataSourceTrait
{
    /**
     * @param AttachDataSourceRequest $args
     * @return AttachDataSourceResponse
     */
    public function attachDataSource(AttachDataSourceRequest $args)
    {
        $result = parent::attachDataSource($args->toArray());
        return new AttachDataSourceResponse($result->toArray());
    }
}
