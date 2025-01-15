<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalySubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SubscriptionArnList
 * @property string|null $MonitorArn
 * @property string|null $NextPageToken
 * @property int|null $MaxResults
 */
class GetAnomalySubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionArnList?: list<string>|null,
     *     MonitorArn?: string|null,
     *     NextPageToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
