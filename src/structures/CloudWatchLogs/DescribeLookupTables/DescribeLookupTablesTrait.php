<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLookupTables;

trait DescribeLookupTablesTrait
{
    /**
     * @param DescribeLookupTablesRequest $args
     * @return DescribeLookupTablesResponse
     */
    public function describeLookupTables(DescribeLookupTablesRequest $args)
    {
        $result = parent::describeLookupTables($args->toArray());
        return new DescribeLookupTablesResponse($result->toArray());
    }
}
