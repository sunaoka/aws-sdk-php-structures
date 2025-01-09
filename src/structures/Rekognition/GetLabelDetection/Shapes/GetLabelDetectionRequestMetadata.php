<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME'|'TIMESTAMP' $SortBy
 * @property 'TIMESTAMPS'|'SEGMENTS' $AggregateBy
 */
class GetLabelDetectionRequestMetadata extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'NAME'|'TIMESTAMP',
     *     AggregateBy?: 'TIMESTAMPS'|'SEGMENTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
