<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetEventStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property 'HEALTHY'|'UNHEALTHY' $Status
 * @property \Aws\Api\DateTimeResult $UnhealthySince
 * @property string $Message
 */
class EventStreamDestinationDetails extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     Status: 'HEALTHY'|'UNHEALTHY',
     *     UnhealthySince?: \Aws\Api\DateTimeResult,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
