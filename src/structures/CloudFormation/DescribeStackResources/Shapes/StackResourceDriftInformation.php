<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN' $StackResourceDriftStatus
 * @property \Aws\Api\DateTimeResult|null $LastCheckTimestamp
 */
class StackResourceDriftInformation extends Shape
{
    /**
     * @param array{
     *     StackResourceDriftStatus: 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN',
     *     LastCheckTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
