<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $Path
 * @property 'REPORT_CSV_20191124'|null $Format
 * @property 'FAILED_FILES_ONLY'|null $Scope
 */
class CompletionReport extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Path?: string|null,
     *     Format?: 'REPORT_CSV_20191124'|null,
     *     Scope?: 'FAILED_FILES_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
