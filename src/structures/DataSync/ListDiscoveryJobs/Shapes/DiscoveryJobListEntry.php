<?php

namespace Sunaoka\Aws\Structures\DataSync\ListDiscoveryJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DiscoveryJobArn
 * @property 'RUNNING'|'WARNING'|'TERMINATED'|'FAILED'|'STOPPED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|null $Status
 */
class DiscoveryJobListEntry extends Shape
{
    /**
     * @param array{
     *     DiscoveryJobArn?: string|null,
     *     Status?: 'RUNNING'|'WARNING'|'TERMINATED'|'FAILED'|'STOPPED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
