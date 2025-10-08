<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataView;

trait CreateDataViewTrait
{
    /**
     * @param CreateDataViewRequest $args
     * @return CreateDataViewResponse
     */
    public function createDataView(CreateDataViewRequest $args)
    {
        $result = parent::createDataView($args->toArray());
        return new CreateDataViewResponse($result->toArray());
    }
}
