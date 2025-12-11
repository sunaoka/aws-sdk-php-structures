<?php

namespace Sunaoka\Aws\Structures\Connect\SearchDataTables;

trait SearchDataTablesTrait
{
    /**
     * @param SearchDataTablesRequest $args
     * @return SearchDataTablesResponse
     */
    public function searchDataTables(SearchDataTablesRequest $args)
    {
        $result = parent::searchDataTables($args->toArray());
        return new SearchDataTablesResponse($result->toArray());
    }
}
