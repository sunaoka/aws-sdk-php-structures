<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDeclarativePoliciesReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReportId
 * @property string|null $S3Bucket
 * @property string|null $S3Prefix
 * @property string|null $TargetId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'running'|'cancelled'|'complete'|'error'|null $Status
 * @property list<Tag>|null $Tags
 */
class DeclarativePoliciesReport extends Shape
{
    /**
     * @param array{
     *     ReportId?: string|null,
     *     S3Bucket?: string|null,
     *     S3Prefix?: string|null,
     *     TargetId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'running'|'cancelled'|'complete'|'error'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
