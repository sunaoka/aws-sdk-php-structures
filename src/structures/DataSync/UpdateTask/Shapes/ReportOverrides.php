<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportOverride $Transferred
 * @property ReportOverride $Verified
 * @property ReportOverride $Deleted
 * @property ReportOverride $Skipped
 */
class ReportOverrides extends Shape
{
    /**
     * @param array{
     *     Transferred?: ReportOverride,
     *     Verified?: ReportOverride,
     *     Deleted?: ReportOverride,
     *     Skipped?: ReportOverride
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
