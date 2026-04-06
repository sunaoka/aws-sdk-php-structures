<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLookupTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $lookupTableNamePrefix
 * @property int<min, 100>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeLookupTablesRequest extends Request
{
    /**
     * @param array{
     *     lookupTableNamePrefix?: string|null,
     *     maxResults?: int<min, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
