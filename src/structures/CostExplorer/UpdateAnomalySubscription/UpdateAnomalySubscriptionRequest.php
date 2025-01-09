<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateAnomalySubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionArn
 * @property double $Threshold
 * @property 'DAILY'|'IMMEDIATE'|'WEEKLY' $Frequency
 * @property list<string> $MonitorArnList
 * @property list<Shapes\Subscriber> $Subscribers
 * @property string $SubscriptionName
 * @property Shapes\Expression $ThresholdExpression
 */
class UpdateAnomalySubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionArn: string,
     *     Threshold?: double,
     *     Frequency?: 'DAILY'|'IMMEDIATE'|'WEEKLY',
     *     MonitorArnList?: list<string>,
     *     Subscribers?: list<Shapes\Subscriber>,
     *     SubscriptionName?: string,
     *     ThresholdExpression?: Shapes\Expression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
