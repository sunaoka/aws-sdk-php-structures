<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateAnomalySubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionArn
 * @property double|null $Threshold
 * @property 'DAILY'|'IMMEDIATE'|'WEEKLY'|null $Frequency
 * @property list<string>|null $MonitorArnList
 * @property list<Shapes\Subscriber>|null $Subscribers
 * @property string|null $SubscriptionName
 * @property Shapes\Expression|null $ThresholdExpression
 */
class UpdateAnomalySubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionArn: string,
     *     Threshold?: double|null,
     *     Frequency?: 'DAILY'|'IMMEDIATE'|'WEEKLY'|null,
     *     MonitorArnList?: list<string>|null,
     *     Subscribers?: list<Shapes\Subscriber>|null,
     *     SubscriptionName?: string|null,
     *     ThresholdExpression?: Shapes\Expression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
