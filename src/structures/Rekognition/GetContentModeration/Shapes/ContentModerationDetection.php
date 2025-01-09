<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property ModerationLabel $ModerationLabel
 * @property int<0, max> $StartTimestampMillis
 * @property int<0, max> $EndTimestampMillis
 * @property int<0, max> $DurationMillis
 * @property list<ContentType> $ContentTypes
 */
class ContentModerationDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     ModerationLabel?: ModerationLabel,
     *     StartTimestampMillis?: int<0, max>,
     *     EndTimestampMillis?: int<0, max>,
     *     DurationMillis?: int<0, max>,
     *     ContentTypes?: list<ContentType>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
