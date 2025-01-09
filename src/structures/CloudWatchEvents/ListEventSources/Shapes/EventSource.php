<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListEventSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 * @property string $Name
 * @property 'PENDING'|'ACTIVE'|'DELETED' $State
 */
class EventSource extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedBy?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ExpirationTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     State?: 'PENDING'|'ACTIVE'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
