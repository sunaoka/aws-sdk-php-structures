<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateDataCellsFilter;

trait UpdateDataCellsFilterTrait
{
    /**
     * @param UpdateDataCellsFilterRequest $args
     * @return UpdateDataCellsFilterResponse
     */
    public function updateDataCellsFilter(UpdateDataCellsFilterRequest $args)
    {
        $result = parent::updateDataCellsFilter($args->toArray());
        return new UpdateDataCellsFilterResponse($result->toArray());
    }
}
