<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property ModerationLabel $ModerationLabel
 * @property int $StartTimestampMillis
 * @property int $EndTimestampMillis
 * @property int $DurationMillis
 * @property list<ContentType> $ContentTypes
 */
class ContentModerationDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     ModerationLabel?: ModerationLabel,
     *     StartTimestampMillis?: int,
     *     EndTimestampMillis?: int,
     *     DurationMillis?: int,
     *     ContentTypes?: list<ContentType>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
