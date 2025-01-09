<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $exitCode
 * @property string $reason
 */
class ContainerSummary extends Shape
{
    /**
     * @param array{
     *     exitCode?: int,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
