<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AnomalyDetection'> $eventPublishers
 * @property string $id
 * @property string $uri
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     eventPublishers: list<'AnomalyDetection'>,
     *     id?: string,
     *     uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
