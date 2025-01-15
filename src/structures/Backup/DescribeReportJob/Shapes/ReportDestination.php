<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketName
 * @property list<string>|null $S3Keys
 */
class ReportDestination extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string|null,
     *     S3Keys?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
