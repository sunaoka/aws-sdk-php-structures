<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListEventActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Action $Action
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property Event $Event
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class EventActionEntry extends Shape
{
    /**
     * @param array{
     *     Action: Action,
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Event: Event,
     *     Id: string,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
