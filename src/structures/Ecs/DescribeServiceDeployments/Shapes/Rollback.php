<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property string $serviceRevisionArn
 */
class Rollback extends Shape
{
    /**
     * @param array{
     *     reason?: string,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     serviceRevisionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
