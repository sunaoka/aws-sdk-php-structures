<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteDataCellsFilter;

trait DeleteDataCellsFilterTrait
{
    /**
     * @param DeleteDataCellsFilterRequest $args
     * @return DeleteDataCellsFilterResponse
     */
    public function deleteDataCellsFilter(DeleteDataCellsFilterRequest $args)
    {
        $result = parent::deleteDataCellsFilter($args->toArray());
        return new DeleteDataCellsFilterResponse($result->toArray());
    }
}
