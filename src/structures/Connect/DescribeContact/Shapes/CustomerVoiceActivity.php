<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $GreetingStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $GreetingEndTimestamp
 */
class CustomerVoiceActivity extends Shape
{
    /**
     * @param array{
     *     GreetingStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     GreetingEndTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
