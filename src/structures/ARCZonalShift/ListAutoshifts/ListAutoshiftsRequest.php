<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListAutoshifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property 'ACTIVE'|'COMPLETED'|null $status
 * @property int<1, 100>|null $maxResults
 */
class ListAutoshiftsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     status?: 'ACTIVE'|'COMPLETED'|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
