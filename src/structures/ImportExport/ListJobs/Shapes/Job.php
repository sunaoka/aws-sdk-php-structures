<?php

namespace Sunaoka\Aws\Structures\ImportExport\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property bool|null $IsCanceled
 * @property 'Import'|'Export'|null $JobType
 */
class Job extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     IsCanceled?: bool|null,
     *     JobType?: 'Import'|'Export'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
