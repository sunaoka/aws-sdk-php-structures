<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEventSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEventSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
