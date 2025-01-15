<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeEventSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SubscriptionName
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEventSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
