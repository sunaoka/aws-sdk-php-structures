<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteDirectQueryDataSource;

trait DeleteDirectQueryDataSourceTrait
{
    /**
     * @param DeleteDirectQueryDataSourceRequest $args
     * @return void
     */
    public function deleteDirectQueryDataSource(DeleteDirectQueryDataSourceRequest $args)
    {
        parent::deleteDirectQueryDataSource($args->toArray());
    }
}
