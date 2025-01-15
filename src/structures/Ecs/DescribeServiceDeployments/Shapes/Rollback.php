<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string|null $serviceRevisionArn
 */
class Rollback extends Shape
{
    /**
     * @param array{
     *     reason?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     serviceRevisionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
