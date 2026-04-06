<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateDataTablePrimaryValues;

trait UpdateDataTablePrimaryValuesTrait
{
    /**
     * @param UpdateDataTablePrimaryValuesRequest $args
     * @return UpdateDataTablePrimaryValuesResponse
     */
    public function updateDataTablePrimaryValues(UpdateDataTablePrimaryValuesRequest $args)
    {
        $result = parent::updateDataTablePrimaryValues($args->toArray());
        return new UpdateDataTablePrimaryValuesResponse($result->toArray());
    }
}
