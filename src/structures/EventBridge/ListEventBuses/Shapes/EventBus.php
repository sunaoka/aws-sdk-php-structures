<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListEventBuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Description
 * @property string $Policy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class EventBus extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Description?: string,
     *     Policy?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
