<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'INVITED'|'ACTIVE' $memberStatus
 */
class ListCollaborationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     memberStatus?: 'INVITED'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
