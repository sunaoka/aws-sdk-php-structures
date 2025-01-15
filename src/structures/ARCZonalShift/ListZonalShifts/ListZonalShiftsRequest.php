<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListZonalShifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $resourceIdentifier
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED'|null $status
 */
class ListZonalShiftsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resourceIdentifier?: string|null,
     *     status?: 'ACTIVE'|'EXPIRED'|'CANCELED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
