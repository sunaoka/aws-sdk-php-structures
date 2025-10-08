<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet;

trait CreateDataSetTrait
{
    /**
     * @param CreateDataSetRequest $args
     * @return CreateDataSetResponse
     */
    public function createDataSet(CreateDataSetRequest $args)
    {
        $result = parent::createDataSet($args->toArray());
        return new CreateDataSetResponse($result->toArray());
    }
}
