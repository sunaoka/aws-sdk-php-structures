<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataView;

trait GetDataViewTrait
{
    /**
     * @param GetDataViewRequest $args
     * @return GetDataViewResponse
     */
    public function getDataView(GetDataViewRequest $args)
    {
        $result = parent::getDataView($args->toArray());
        return new GetDataViewResponse($result->toArray());
    }
}
