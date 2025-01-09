<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED' $StackResourceDriftStatus
 * @property \Aws\Api\DateTimeResult $LastCheckTimestamp
 */
class StackResourceDriftInformation extends Shape
{
    /**
     * @param array{
     *     StackResourceDriftStatus: 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED',
     *     LastCheckTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
