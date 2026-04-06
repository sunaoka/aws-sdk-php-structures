<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Timestamp
 * @property ModerationLabel|null $ModerationLabel
 * @property int<0, max>|null $StartTimestampMillis
 * @property int<0, max>|null $EndTimestampMillis
 * @property int<0, max>|null $DurationMillis
 * @property list<ContentType>|null $ContentTypes
 */
class ContentModerationDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int|null,
     *     ModerationLabel?: ModerationLabel|null,
     *     StartTimestampMillis?: int<0, max>|null,
     *     EndTimestampMillis?: int<0, max>|null,
     *     DurationMillis?: int<0, max>|null,
     *     ContentTypes?: list<ContentType>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
