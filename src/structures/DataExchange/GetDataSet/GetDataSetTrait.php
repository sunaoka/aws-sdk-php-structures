<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetDataSet;

trait GetDataSetTrait
{
    /**
     * @param GetDataSetRequest $args
     * @return GetDataSetResponse
     */
    public function getDataSet(GetDataSetRequest $args)
    {
        $result = parent::getDataSet($args->toArray());
        return new GetDataSetResponse($result->toArray());
    }
}
