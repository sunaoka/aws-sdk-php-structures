<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $GreetingStartTimestamp
 * @property \Aws\Api\DateTimeResult $GreetingEndTimestamp
 */
class CustomerVoiceActivity extends Shape
{
    /**
     * @param array{
     *     GreetingStartTimestamp?: \Aws\Api\DateTimeResult,
     *     GreetingEndTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
