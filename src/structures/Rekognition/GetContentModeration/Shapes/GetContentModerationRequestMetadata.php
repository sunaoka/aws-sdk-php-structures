<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME'|'TIMESTAMP' $SortBy
 * @property 'TIMESTAMPS'|'SEGMENTS' $AggregateBy
 */
class GetContentModerationRequestMetadata extends Shape
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
