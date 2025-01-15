<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $destinationName
 * @property string|null $targetArn
 * @property string|null $roleArn
 * @property string|null $accessPolicy
 * @property string|null $arn
 * @property int<0, max>|null $creationTime
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     destinationName?: string|null,
     *     targetArn?: string|null,
     *     roleArn?: string|null,
     *     accessPolicy?: string|null,
     *     arn?: string|null,
     *     creationTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
