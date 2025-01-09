<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property Label $Label
 * @property int<0, max> $StartTimestampMillis
 * @property int<0, max> $EndTimestampMillis
 * @property int<0, max> $DurationMillis
 */
class LabelDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     Label?: Label,
     *     StartTimestampMillis?: int<0, max>,
     *     EndTimestampMillis?: int<0, max>,
     *     DurationMillis?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
