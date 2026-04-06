<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\PutProjectEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Event> $events
 * @property string $project
 */
class PutProjectEventsRequest extends Request
{
    /**
     * @param array{
     *     events: list<Shapes\Event>,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
