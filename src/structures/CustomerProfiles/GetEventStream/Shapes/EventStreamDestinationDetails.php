<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetEventStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property 'HEALTHY'|'UNHEALTHY' $Status
 * @property \Aws\Api\DateTimeResult|null $UnhealthySince
 * @property string|null $Message
 */
class EventStreamDestinationDetails extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     Status: 'HEALTHY'|'UNHEALTHY',
     *     UnhealthySince?: \Aws\Api\DateTimeResult|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
