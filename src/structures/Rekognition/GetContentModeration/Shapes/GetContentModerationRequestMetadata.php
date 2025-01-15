<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME'|'TIMESTAMP'|null $SortBy
 * @property 'TIMESTAMPS'|'SEGMENTS'|null $AggregateBy
 */
class GetContentModerationRequestMetadata extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'NAME'|'TIMESTAMP'|null,
     *     AggregateBy?: 'TIMESTAMPS'|'SEGMENTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
