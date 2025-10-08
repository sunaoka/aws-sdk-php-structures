<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable;

trait ImportTableTrait
{
    /**
     * @param ImportTableRequest $args
     * @return ImportTableResponse
     */
    public function importTable(ImportTableRequest $args)
    {
        $result = parent::importTable($args->toArray());
        return new ImportTableResponse($result->toArray());
    }
}
