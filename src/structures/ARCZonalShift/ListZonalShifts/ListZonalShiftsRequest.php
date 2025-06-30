<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListZonalShifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED'|null $status
 * @property int<1, 100>|null $maxResults
 * @property string|null $resourceIdentifier
 */
class ListZonalShiftsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     status?: 'ACTIVE'|'EXPIRED'|'CANCELED'|null,
     *     maxResults?: int<1, 100>|null,
     *     resourceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
