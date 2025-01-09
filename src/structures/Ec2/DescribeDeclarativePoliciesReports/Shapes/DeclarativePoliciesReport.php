<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDeclarativePoliciesReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportId
 * @property string $S3Bucket
 * @property string $S3Prefix
 * @property string $TargetId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'running'|'cancelled'|'complete'|'error' $Status
 * @property list<Tag> $Tags
 */
class DeclarativePoliciesReport extends Shape
{
    /**
     * @param array{
     *     ReportId?: string,
     *     S3Bucket?: string,
     *     S3Prefix?: string,
     *     TargetId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'running'|'cancelled'|'complete'|'error',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
