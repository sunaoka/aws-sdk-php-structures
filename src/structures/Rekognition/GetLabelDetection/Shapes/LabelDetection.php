<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Timestamp
 * @property Label|null $Label
 * @property int<0, max>|null $StartTimestampMillis
 * @property int<0, max>|null $EndTimestampMillis
 * @property int<0, max>|null $DurationMillis
 */
class LabelDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int|null,
     *     Label?: Label|null,
     *     StartTimestampMillis?: int<0, max>|null,
     *     EndTimestampMillis?: int<0, max>|null,
     *     DurationMillis?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
