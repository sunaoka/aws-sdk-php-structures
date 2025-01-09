<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property 'Report_CSV_20180820' $Format
 * @property bool $Enabled
 * @property string $Prefix
 * @property 'AllTasks'|'FailedTasksOnly' $ReportScope
 */
class JobReport extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Format?: 'Report_CSV_20180820',
     *     Enabled: bool,
     *     Prefix?: string,
     *     ReportScope?: 'AllTasks'|'FailedTasksOnly'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
