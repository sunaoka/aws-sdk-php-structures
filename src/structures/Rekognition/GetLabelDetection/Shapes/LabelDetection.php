<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property Label $Label
 * @property int $StartTimestampMillis
 * @property int $EndTimestampMillis
 * @property int $DurationMillis
 */
class LabelDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     Label?: Label,
     *     StartTimestampMillis?: int,
     *     EndTimestampMillis?: int,
     *     DurationMillis?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
