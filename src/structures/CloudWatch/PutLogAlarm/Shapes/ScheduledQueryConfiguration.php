<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutLogAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryString
 * @property list<string>|null $LogGroupIdentifiers
 * @property string|null $QueryARN
 * @property string $ScheduledQueryRoleARN
 * @property ScheduleConfiguration $ScheduleConfiguration
 * @property string $AggregationExpression
 * @property list<Tag>|null $Tags
 */
class ScheduledQueryConfiguration extends Shape
{
    /**
     * @param array{
     *     QueryString: string,
     *     LogGroupIdentifiers?: list<string>|null,
     *     QueryARN?: string|null,
     *     ScheduledQueryRoleARN: string,
     *     ScheduleConfiguration: ScheduleConfiguration,
     *     AggregationExpression: string,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
