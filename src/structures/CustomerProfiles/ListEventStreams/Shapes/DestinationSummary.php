<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListEventStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property 'HEALTHY'|'UNHEALTHY' $Status
 * @property \Aws\Api\DateTimeResult $UnhealthySince
 */
class DestinationSummary extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     Status: 'HEALTHY'|'UNHEALTHY',
     *     UnhealthySince?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
