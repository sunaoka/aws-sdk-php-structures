<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTableValues;

trait ListDataTableValuesTrait
{
    /**
     * @param ListDataTableValuesRequest $args
     * @return ListDataTableValuesResponse
     */
    public function listDataTableValues(ListDataTableValuesRequest $args)
    {
        $result = parent::listDataTableValues($args->toArray());
        return new ListDataTableValuesResponse($result->toArray());
    }
}
