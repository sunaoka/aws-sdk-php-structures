<?php

namespace Sunaoka\Aws\Structures\Keyspaces\RestoreTable;

trait RestoreTableTrait
{
    /**
     * @param RestoreTableRequest $args
     * @return RestoreTableResponse
     */
    public function restoreTable(RestoreTableRequest $args)
    {
        $result = parent::restoreTable($args->toArray());
        return new RestoreTableResponse($result->toArray());
    }
}
