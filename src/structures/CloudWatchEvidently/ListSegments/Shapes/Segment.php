<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $description
 * @property int|null $experimentCount
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property int|null $launchCount
 * @property string $name
 * @property string $pattern
 * @property array<string, string>|null $tags
 */
class Segment extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     experimentCount?: int|null,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     launchCount?: int|null,
     *     name: string,
     *     pattern: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
