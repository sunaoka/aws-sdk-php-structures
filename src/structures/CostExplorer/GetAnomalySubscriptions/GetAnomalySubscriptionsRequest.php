<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalySubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SubscriptionArnList
 * @property string $MonitorArn
 * @property string $NextPageToken
 * @property int $MaxResults
 */
class GetAnomalySubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionArnList?: list<string>,
     *     MonitorArn?: string,
     *     NextPageToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
