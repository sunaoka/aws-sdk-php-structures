<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $exitCode
 * @property string|null $reason
 */
class ContainerSummary extends Shape
{
    /**
     * @param array{
     *     exitCode?: int|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
