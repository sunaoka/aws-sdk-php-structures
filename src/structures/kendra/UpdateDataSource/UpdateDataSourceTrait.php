<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource;

trait UpdateDataSourceTrait
{
    /**
     * @param UpdateDataSourceRequest $args
     * @return void
     */
    public function updateDataSource(UpdateDataSourceRequest $args)
    {
        parent::updateDataSource($args->toArray());
    }
}
