<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServiceUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceUpdateName
 * @property list<'available'|'cancelled'|'expired'> $ServiceUpdateStatus
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeServiceUpdatesRequest extends Request
{
    /**
     * @param array{
     *     ServiceUpdateName?: string,
     *     ServiceUpdateStatus?: list<'available'|'cancelled'|'expired'>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
