<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListAutoshifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'ACTIVE'|'COMPLETED' $status
 */
class ListAutoshiftsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     status?: 'ACTIVE'|'COMPLETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
