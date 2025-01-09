<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEventSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeEventSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
