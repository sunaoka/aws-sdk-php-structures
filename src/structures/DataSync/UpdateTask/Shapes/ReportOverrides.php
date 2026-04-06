<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportOverride|null $Transferred
 * @property ReportOverride|null $Verified
 * @property ReportOverride|null $Deleted
 * @property ReportOverride|null $Skipped
 */
class ReportOverrides extends Shape
{
    /**
     * @param array{
     *     Transferred?: ReportOverride|null,
     *     Verified?: ReportOverride|null,
     *     Deleted?: ReportOverride|null,
     *     Skipped?: ReportOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
