<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsageReportSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketName
 * @property 'DAILY'|null $Schedule
 * @property \Aws\Api\DateTimeResult|null $LastGeneratedReportDate
 * @property list<LastReportGenerationExecutionError>|null $SubscriptionErrors
 */
class UsageReportSubscription extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string|null,
     *     Schedule?: 'DAILY'|null,
     *     LastGeneratedReportDate?: \Aws\Api\DateTimeResult|null,
     *     SubscriptionErrors?: list<LastReportGenerationExecutionError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
