<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property 'Report_CSV_20180820'|null $Format
 * @property bool $Enabled
 * @property string|null $Prefix
 * @property 'AllTasks'|'FailedTasksOnly'|null $ReportScope
 * @property string|null $ExpectedBucketOwner
 */
class JobReport extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Format?: 'Report_CSV_20180820'|null,
     *     Enabled: bool,
     *     Prefix?: string|null,
     *     ReportScope?: 'AllTasks'|'FailedTasksOnly'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
