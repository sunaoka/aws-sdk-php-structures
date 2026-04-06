<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupName
 * @property string|null $logGroupArn
 * @property 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null $logGroupClass
 */
class LogGroupSummary extends Shape
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     logGroupArn?: string|null,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
