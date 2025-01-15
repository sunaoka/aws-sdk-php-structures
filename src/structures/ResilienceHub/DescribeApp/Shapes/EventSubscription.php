<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ScheduledAssessmentFailure'|'DriftDetected' $eventType
 * @property string $name
 * @property string|null $snsTopicArn
 */
class EventSubscription extends Shape
{
    /**
     * @param array{
     *     eventType: 'ScheduledAssessmentFailure'|'DriftDetected',
     *     name: string,
     *     snsTopicArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
