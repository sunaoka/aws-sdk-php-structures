<?php

namespace Sunaoka\Aws\Structures\Chime\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AttendeeIds
 * @property list<string> $ExternalUserIds
 */
class SelectedVideoStreams extends Shape
{
    /**
     * @param array{
     *     AttendeeIds?: list<string>,
     *     ExternalUserIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
