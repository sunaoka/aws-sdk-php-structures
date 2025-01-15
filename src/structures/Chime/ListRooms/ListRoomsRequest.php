<?php

namespace Sunaoka\Aws\Structures\Chime\ListRooms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $MemberId
 * @property int<1, 99>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRoomsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MemberId?: string|null,
     *     MaxResults?: int<1, 99>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
