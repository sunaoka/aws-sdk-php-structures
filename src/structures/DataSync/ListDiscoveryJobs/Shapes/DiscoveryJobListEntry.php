<?php

namespace Sunaoka\Aws\Structures\DataSync\ListDiscoveryJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DiscoveryJobArn
 * @property 'RUNNING'|'WARNING'|'TERMINATED'|'FAILED'|'STOPPED'|'COMPLETED'|'COMPLETED_WITH_ISSUES' $Status
 */
class DiscoveryJobListEntry extends Shape
{
    /**
     * @param array{
     *     DiscoveryJobArn?: string,
     *     Status?: 'RUNNING'|'WARNING'|'TERMINATED'|'FAILED'|'STOPPED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
