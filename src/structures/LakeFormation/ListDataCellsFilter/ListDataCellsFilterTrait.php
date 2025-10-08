<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListDataCellsFilter;

trait ListDataCellsFilterTrait
{
    /**
     * @param ListDataCellsFilterRequest $args
     * @return ListDataCellsFilterResponse
     */
    public function listDataCellsFilter(ListDataCellsFilterRequest $args)
    {
        $result = parent::listDataCellsFilter($args->toArray());
        return new ListDataCellsFilterResponse($result->toArray());
    }
}
