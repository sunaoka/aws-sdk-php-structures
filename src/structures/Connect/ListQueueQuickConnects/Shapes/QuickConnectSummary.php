<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueQuickConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW'|null $QuickConnectType
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class QuickConnectSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     QuickConnectType?: 'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW'|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
