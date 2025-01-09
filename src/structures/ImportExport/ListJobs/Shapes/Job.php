<?php

namespace Sunaoka\Aws\Structures\ImportExport\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property bool $IsCanceled
 * @property 'Import'|'Export' $JobType
 */
class Job extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     IsCanceled?: bool,
     *     JobType?: 'Import'|'Export'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
