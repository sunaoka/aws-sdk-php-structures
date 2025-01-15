<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StatusStartTimestamp
 * @property string|null $StatusArn
 * @property string|null $StatusName
 */
class AgentStatusReference extends Shape
{
    /**
     * @param array{
     *     StatusStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StatusArn?: string|null,
     *     StatusName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
