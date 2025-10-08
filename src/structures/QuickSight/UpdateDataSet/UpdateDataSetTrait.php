<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet;

trait UpdateDataSetTrait
{
    /**
     * @param UpdateDataSetRequest $args
     * @return UpdateDataSetResponse
     */
    public function updateDataSet(UpdateDataSetRequest $args)
    {
        $result = parent::updateDataSet($args->toArray());
        return new UpdateDataSetResponse($result->toArray());
    }
}
