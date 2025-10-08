<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateDataCellsFilter;

trait CreateDataCellsFilterTrait
{
    /**
     * @param CreateDataCellsFilterRequest $args
     * @return CreateDataCellsFilterResponse
     */
    public function createDataCellsFilter(CreateDataCellsFilterRequest $args)
    {
        $result = parent::createDataCellsFilter($args->toArray());
        return new CreateDataCellsFilterResponse($result->toArray());
    }
}
