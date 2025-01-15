<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListEventSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property string|null $Name
 * @property 'PENDING'|'ACTIVE'|'DELETED'|null $State
 */
class EventSource extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedBy?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     State?: 'PENDING'|'ACTIVE'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
