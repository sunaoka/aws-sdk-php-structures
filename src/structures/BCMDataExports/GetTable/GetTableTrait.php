<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetTable;

trait GetTableTrait
{
    /**
     * @param GetTableRequest $args
     * @return GetTableResponse
     */
    public function getTable(GetTableRequest $args)
    {
        $result = parent::getTable($args->toArray());
        return new GetTableResponse($result->toArray());
    }
}
