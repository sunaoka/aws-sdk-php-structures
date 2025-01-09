<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'STANDARD'|'AGENT' $QueueType
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class QueueSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     QueueType?: 'STANDARD'|'AGENT',
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
