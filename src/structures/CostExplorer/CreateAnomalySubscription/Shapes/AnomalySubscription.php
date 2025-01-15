<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalySubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubscriptionArn
 * @property string|null $AccountId
 * @property list<string> $MonitorArnList
 * @property list<Subscriber> $Subscribers
 * @property double|null $Threshold
 * @property 'DAILY'|'IMMEDIATE'|'WEEKLY' $Frequency
 * @property string $SubscriptionName
 * @property Expression|null $ThresholdExpression
 */
class AnomalySubscription extends Shape
{
    /**
     * @param array{
     *     SubscriptionArn?: string|null,
     *     AccountId?: string|null,
     *     MonitorArnList: list<string>,
     *     Subscribers: list<Subscriber>,
     *     Threshold?: double|null,
     *     Frequency: 'DAILY'|'IMMEDIATE'|'WEEKLY',
     *     SubscriptionName: string,
     *     ThresholdExpression?: Expression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
