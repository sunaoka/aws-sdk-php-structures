<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationName
 * @property string $targetArn
 * @property string $roleArn
 * @property string $accessPolicy
 * @property string $arn
 * @property int<0, max> $creationTime
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     destinationName?: string,
     *     targetArn?: string,
     *     roleArn?: string,
     *     accessPolicy?: string,
     *     arn?: string,
     *     creationTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
