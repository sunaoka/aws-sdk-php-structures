<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'OLTP'|'AJD'|'APEX'|'LH'|null $dbWorkload
 */
class ListAutonomousDatabaseVersionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     dbWorkload?: 'OLTP'|'AJD'|'APEX'|'LH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
