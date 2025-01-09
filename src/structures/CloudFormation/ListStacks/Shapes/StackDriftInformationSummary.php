<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED' $StackDriftStatus
 * @property \Aws\Api\DateTimeResult $LastCheckTimestamp
 */
class StackDriftInformationSummary extends Shape
{
    /**
     * @param array{
     *     StackDriftStatus: 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED',
     *     LastCheckTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
