<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteDataSource;

trait DeleteDataSourceTrait
{
    /**
     * @param DeleteDataSourceRequest $args
     * @return void
     */
    public function deleteDataSource(DeleteDataSourceRequest $args)
    {
        parent::deleteDataSource($args->toArray());
    }
}
