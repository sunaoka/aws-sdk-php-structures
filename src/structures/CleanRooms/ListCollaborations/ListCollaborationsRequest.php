<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'INVITED'|'ACTIVE'|null $memberStatus
 */
class ListCollaborationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     memberStatus?: 'INVITED'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
