<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteDataSet;

trait DeleteDataSetTrait
{
    /**
     * @param DeleteDataSetRequest $args
     * @return void
     */
    public function deleteDataSet(DeleteDataSetRequest $args)
    {
        parent::deleteDataSet($args->toArray());
    }
}
