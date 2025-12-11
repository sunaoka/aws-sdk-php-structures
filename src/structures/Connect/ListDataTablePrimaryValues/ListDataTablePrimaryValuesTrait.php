<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTablePrimaryValues;

trait ListDataTablePrimaryValuesTrait
{
    /**
     * @param ListDataTablePrimaryValuesRequest $args
     * @return ListDataTablePrimaryValuesResponse
     */
    public function listDataTablePrimaryValues(ListDataTablePrimaryValuesRequest $args)
    {
        $result = parent::listDataTablePrimaryValues($args->toArray());
        return new ListDataTablePrimaryValuesResponse($result->toArray());
    }
}
