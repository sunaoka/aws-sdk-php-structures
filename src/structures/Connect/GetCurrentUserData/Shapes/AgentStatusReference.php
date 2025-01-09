<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StatusStartTimestamp
 * @property string $StatusArn
 * @property string $StatusName
 */
class AgentStatusReference extends Shape
{
    /**
     * @param array{
     *     StatusStartTimestamp?: \Aws\Api\DateTimeResult,
     *     StatusArn?: string,
     *     StatusName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
