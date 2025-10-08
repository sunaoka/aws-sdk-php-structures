<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables;

trait SearchTablesTrait
{
    /**
     * @param SearchTablesRequest $args
     * @return SearchTablesResponse
     */
    public function searchTables(SearchTablesRequest $args)
    {
        $result = parent::searchTables($args->toArray());
        return new SearchTablesResponse($result->toArray());
    }
}
