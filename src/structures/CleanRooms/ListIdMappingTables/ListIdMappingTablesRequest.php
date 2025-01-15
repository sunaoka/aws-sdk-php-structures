<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdMappingTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListIdMappingTablesRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
