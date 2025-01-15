<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AttendeeIds
 * @property list<string>|null $ExternalUserIds
 */
class SelectedVideoStreams extends Shape
{
    /**
     * @param array{
     *     AttendeeIds?: list<string>|null,
     *     ExternalUserIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
