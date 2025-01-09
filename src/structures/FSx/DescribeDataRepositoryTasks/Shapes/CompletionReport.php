<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $Path
 * @property 'REPORT_CSV_20191124' $Format
 * @property 'FAILED_FILES_ONLY' $Scope
 */
class CompletionReport extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Path?: string,
     *     Format?: 'REPORT_CSV_20191124',
     *     Scope?: 'FAILED_FILES_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
