<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServiceUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServiceUpdateName
 * @property list<'available'|'cancelled'|'expired'>|null $ServiceUpdateStatus
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeServiceUpdatesRequest extends Request
{
    /**
     * @param array{
     *     ServiceUpdateName?: string|null,
     *     ServiceUpdateStatus?: list<'available'|'cancelled'|'expired'>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
