<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateDataSet;

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
