<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property list<string> $S3Keys
 */
class ReportDestination extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string,
     *     S3Keys?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
