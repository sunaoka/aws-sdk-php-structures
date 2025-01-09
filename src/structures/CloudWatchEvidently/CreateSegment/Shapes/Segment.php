<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property int $experimentCount
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property int $launchCount
 * @property string $name
 * @property string $pattern
 * @property array<string, string> $tags
 */
class Segment extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     experimentCount?: int,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     launchCount?: int,
     *     name: string,
     *     pattern: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
