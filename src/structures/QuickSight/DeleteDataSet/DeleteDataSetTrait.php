<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteDataSet;

trait DeleteDataSetTrait
{
    /**
     * @param DeleteDataSetRequest $args
     * @return DeleteDataSetResponse
     */
    public function deleteDataSet(DeleteDataSetRequest $args)
    {
        $result = parent::deleteDataSet($args->toArray());
        return new DeleteDataSetResponse($result->toArray());
    }
}
