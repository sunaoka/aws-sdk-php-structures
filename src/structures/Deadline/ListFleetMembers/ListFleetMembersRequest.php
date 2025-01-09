<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleetMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListFleetMembersRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
