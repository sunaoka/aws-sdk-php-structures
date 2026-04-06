<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTableRows;

trait ListTableRowsTrait
{
    /**
     * @param ListTableRowsRequest $args
     * @return ListTableRowsResponse
     */
    public function listTableRows(ListTableRowsRequest $args)
    {
        $result = parent::listTableRows($args->toArray());
        return new ListTableRowsResponse($result->toArray());
    }
}
