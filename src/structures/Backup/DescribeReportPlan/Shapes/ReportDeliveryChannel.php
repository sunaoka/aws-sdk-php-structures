<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property list<string>|null $Formats
 */
class ReportDeliveryChannel extends Shape
{
    /**
     * @param array{
     *     S3BucketName: string,
     *     S3KeyPrefix?: string|null,
     *     Formats?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
