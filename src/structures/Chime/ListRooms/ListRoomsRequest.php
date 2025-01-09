<?php

namespace Sunaoka\Aws\Structures\Chime\ListRooms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $MemberId
 * @property int<1, 99> $MaxResults
 * @property string $NextToken
 */
class ListRoomsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MemberId?: string,
     *     MaxResults?: int<1, 99>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
