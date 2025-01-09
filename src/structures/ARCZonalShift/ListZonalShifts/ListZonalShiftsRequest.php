<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListZonalShifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $resourceIdentifier
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED' $status
 */
class ListZonalShiftsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     resourceIdentifier?: string,
     *     status?: 'ACTIVE'|'EXPIRED'|'CANCELED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
