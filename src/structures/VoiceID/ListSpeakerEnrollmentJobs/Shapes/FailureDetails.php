<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakerEnrollmentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property int $StatusCode
 */
class FailureDetails extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     StatusCode?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
