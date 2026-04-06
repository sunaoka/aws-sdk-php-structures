<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListAutoshifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'ACTIVE'|'COMPLETED'|null $status
 */
class ListAutoshiftsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'ACTIVE'|'COMPLETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
