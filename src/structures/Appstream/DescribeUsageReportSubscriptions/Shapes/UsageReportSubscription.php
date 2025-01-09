<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsageReportSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property 'DAILY' $Schedule
 * @property \Aws\Api\DateTimeResult $LastGeneratedReportDate
 * @property list<LastReportGenerationExecutionError> $SubscriptionErrors
 */
class UsageReportSubscription extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string,
     *     Schedule?: 'DAILY',
     *     LastGeneratedReportDate?: \Aws\Api\DateTimeResult,
     *     SubscriptionErrors?: list<LastReportGenerationExecutionError>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
