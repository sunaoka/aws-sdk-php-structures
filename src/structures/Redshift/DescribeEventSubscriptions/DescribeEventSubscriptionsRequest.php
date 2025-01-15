<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEventSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SubscriptionName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<string>|null $TagKeys
 * @property list<string>|null $TagValues
 */
class DescribeEventSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     TagKeys?: list<string>|null,
     *     TagValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
