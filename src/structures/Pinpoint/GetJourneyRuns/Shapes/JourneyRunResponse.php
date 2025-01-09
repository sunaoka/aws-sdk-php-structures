<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreationTime
 * @property string $LastUpdateTime
 * @property string $RunId
 * @property 'SCHEDULED'|'RUNNING'|'COMPLETED'|'CANCELLED' $Status
 */
class JourneyRunResponse extends Shape
{
    /**
     * @param array{
     *     CreationTime: string,
     *     LastUpdateTime: string,
     *     RunId: string,
     *     Status: 'SCHEDULED'|'RUNNING'|'COMPLETED'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
