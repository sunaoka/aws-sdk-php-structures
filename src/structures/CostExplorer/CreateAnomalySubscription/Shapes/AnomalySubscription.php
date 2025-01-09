<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalySubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubscriptionArn
 * @property string $AccountId
 * @property list<string> $MonitorArnList
 * @property list<Subscriber> $Subscribers
 * @property double $Threshold
 * @property 'DAILY'|'IMMEDIATE'|'WEEKLY' $Frequency
 * @property string $SubscriptionName
 * @property Expression $ThresholdExpression
 */
class AnomalySubscription extends Shape
{
    /**
     * @param array{
     *     SubscriptionArn?: string,
     *     AccountId?: string,
     *     MonitorArnList: list<string>,
     *     Subscribers: list<Subscriber>,
     *     Threshold?: double,
     *     Frequency: 'DAILY'|'IMMEDIATE'|'WEEKLY',
     *     SubscriptionName: string,
     *     ThresholdExpression?: Expression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
