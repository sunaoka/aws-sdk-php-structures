<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetDataCellsFilter;

trait GetDataCellsFilterTrait
{
    /**
     * @param GetDataCellsFilterRequest $args
     * @return GetDataCellsFilterResponse
     */
    public function getDataCellsFilter(GetDataCellsFilterRequest $args)
    {
        $result = parent::getDataCellsFilter($args->toArray());
        return new GetDataCellsFilterResponse($result->toArray());
    }
}
